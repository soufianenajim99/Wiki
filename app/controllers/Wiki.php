<?php

class Wiki extends Controller{
    private $wikiSer;
    private $userSer;
    private $categoryService;
   private $tagSer;
    public function __construct() {
      $this->wikiSer = new WikiService();
      $this->userSer = new UserService();
      if(!Auth::islogged() || !$this->userSer->isAuthor($_SESSION["Id_user"])){
        header("Location:".URLROOT."auth/login");   
      }
      $this->categoryService = new CateService();
    $this->tagSer = new TagService();
    }

    public function deleteWiki($id) {
        $this->wikiSer->deleteWiki($id);
        header("Location:".URLROOT."author/wikis");
        }

 
    


}



?>