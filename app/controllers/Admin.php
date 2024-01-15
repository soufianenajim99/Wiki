<?php

class Admin extends Controller {

   private $categoryService;
   private $tagSer;
   private $wikiSer;
   private $userSer;
   

public function __construct(){
  $this->userSer = new UserService();
  if(!Auth::islogged() || $this->userSer->isAuthor($_SESSION["Id_user"])){
    header("Location:".URLROOT."auth/login");    
  }
$this->categoryService = new CateService();
$this->tagSer = new TagService();
$this->wikiSer = new WikiService();
}

    public function dashboard() {

      $cate= $this->wikiSer->countcate();
      $users= $this->wikiSer->countusers();
      $wiki= $this->wikiSer->countwiki();
      $tags= $this->wikiSer->counttags();
      $data=[
        "cate"=> $cate,
        "users"=> $users,
        "wiki"=> $wiki,
        "tags"=> $tags
      ];
      $this->view("admin/dashboard", $data);
    }
    public function categories() {
      if($_SERVER["REQUEST_METHOD"] === "POST" ){
        $newCategorie = $this->model("Category");
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
        $newtag = $this->model("Tag");
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

    public function archiveWiki($id){
      $this->wikiSer->archiveWiki($id);
      header("Location:".URLROOT."admin/wikis");
    }

}