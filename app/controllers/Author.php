<?php

class Author extends Controller {
  private $wikiSer;
    private $userSer;
    public function __construct() {
      $this->wikiSer = new WikiService();
      $this->userSer = new UserService();
      if(!Auth::islogged() || !$this->userSer->isAuthor($_SESSION["Id_user"])){
        header("Location:".URLROOT."auth/login");   
      }
    }

    public function wikis() {
      $wi=$this->wikiSer->displayWiki();
      $data=[
        "wiki"=> $wi
      ];
      $this->view("author/wikis", $data);
    }
    public function dashboard() {
      $this->view("author/dashboard");
    }
 
    public function addWiki(){
      $this->view("author/addWiki");
    }

}