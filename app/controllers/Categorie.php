<?php

class Categorie extends Controller {
   private $cateSer;

   public function __construct(){
    $this->cateSer = new CateService();
   }

    public function deleteCategory($id) {
    $this->cateSer->deleteCategory($id);
    header("Location:".URLROOT."admin/categories");
    }
    
}


?>