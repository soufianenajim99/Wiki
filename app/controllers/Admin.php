<?php

class Admin extends Controller {

   private $categoryService;
   private $tagSer;
   private $wikiSer;
   private $userSer;
   

public function __construct(){
  if(!Auth::islogged()){
    header("Location:".URLROOT."auth/login");    
  }
$this->categoryService = new CateService();
$this->tagSer = new TagService();
$this->wikiSer = new WikiService();
$this->userSer = new UserService();
}

    public function dashboard() {
      $this->view("admin/dashboard");
    }
    public function categories() {
      if($_SERVER["REQUEST_METHOD"] === "POST" ){
        $newCategorie = new Category();
                   var_dump($_POST);
                   $newCategorie->category_name = $_POST["name"];
                   $newCategorie->category_desc = $_POST["desc"];
                   try{
                    $this->categoryService->addCategory($newCategorie);
                    header("Location:".URLROOT."admin/categories");
                   }
                   catch(PDOException $e){
                    die($e->getMessage());
                   }
      }
      
      $cats=$this->categoryService->displayCategory();
      $data=[
        "cats"=> $cats,
        "titre"=> "wikiland"
      ];
        $this->view("admin/categories", $data);
    }
    public function tags() {

      if($_SERVER["REQUEST_METHOD"] === "POST" ){
        $newtag = new Tag();
                   var_dump($_POST);
                   $newtag->tag_name = $_POST["name"];
                  
                   try{
                    $this->tagSer->addTag($newtag);
                    header("Location:".URLROOT."admin/tags");
                   }
                   catch(PDOException $e){
                    die($e->getMessage());
                   }
      }
      
      $tags=$this->tagSer->displayTag();
      $data=[
        "tags"=> $tags,
        "titre"=> "wikiland"
      ];
        $this->view("admin/tags", $data);


      $this->view("admin/tags");
    }
    public function users() {
      $use=$this->userSer->displayUser();
      $data=[
        "user"=> $use
      ];
      $this->view("admin/users" , $data);
    }
    public function wikis() {
      $wi=$this->wikiSer->displayWiki();
      $data=[
        "wiki"=> $wi
      ];
      $this->view("admin/wikis", $data);
    }

}