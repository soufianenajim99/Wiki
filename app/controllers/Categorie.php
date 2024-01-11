<?php

class Categorie extends Controller {
   private $categoryService;

   public function __construct(){
    if(!Auth::islogged()){
      header("Location:".URLROOT."auth/login");    
    }
    $this->categoryService = new CateService();
   }

    public function deleteCategory($id) {
    $this->categoryService->deleteCategory($id);
    header("Location:".URLROOT."admin/categories");
    }

    public function editCategory($id) {
        if($_SERVER["REQUEST_METHOD"] === "POST" ){
            $newCategorie = new Category();
                       var_dump($_POST);
                       $newCategorie->category_name = $_POST["name"];
                       $newCategorie->category_desc = $_POST["desc"];
                       try{
                        $this->categoryService->editCategory($newCategorie, $id);
                        header("Location:".URLROOT."admin/categories");
                       }
                       catch(PDOException $e){
                        die($e->getMessage());
                       }
          }
          $newca=$this->categoryService->getCategory($id);
          
          $cats=$this->categoryService->displayCategory();
          $data=[
            "new"=>$newca,
            "cats"=> $cats,
            "titre"=> "wikiland"
          ];
            $this->view("admin/categories/editCategorie", $data);

    }
    
}


?>