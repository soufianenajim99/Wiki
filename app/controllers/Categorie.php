<?php

class Categorie extends Controller {
   private $categoryService;
   private $userSer;

   public function __construct(){
    $this->userSer = new UserService();
    if(!Auth::islogged() || $this->userSer->isAuthor($_SESSION["Id_user"])){
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
            $newCategorie = $this->model("Category");
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