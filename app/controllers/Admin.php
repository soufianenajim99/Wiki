<?php

class Admin extends Controller {

   private $categoryService;

public function __construct(){
$this->categoryService = new CateService();
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
      $this->view("admin/tags");
    }
    public function users() {
      $this->view("admin/users");
    }
    public function wikis() {
      $this->view("admin/wikis");
    }

}