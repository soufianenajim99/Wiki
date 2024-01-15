<?php

class Tags extends Controller{
    private $tagSer;
    private $userSer;
    public function __construct(){
    $this->userSer = new UserService();
      if(!Auth::islogged() || $this->userSer->isAuthor($_SESSION["Id_user"])){
        header("Location:".URLROOT."auth/login");    
      }
      $this->tagSer = new TagService();
    }

    public function deleteTag($id) {
        $this->tagSer->deleteTag($id);
        header("Location:".URLROOT."admin/tags");
        }
    
        public function editTag($id) {
            if($_SERVER["REQUEST_METHOD"] === "POST" ){
                $newtag = $this->model("Tag");
                           var_dump($_POST);
                           $newtag->tag_name = $_POST["name"];
                           try{
                            $this->tagSer->editTag($newtag, $id);
                            header("Location:".URLROOT."admin/tags");
                           }
                           catch(PDOException $e){
                            die($e->getMessage());
                           }
              }
              $newca=$this->tagSer->getTag($id);
              $tags=$this->tagSer->displayTag();
             
              $data=[
                "new"=>$newca,
                "tags"=> $tags,
                "titre"=> "wikiland"
              ];
                $this->view("admin/tags/editTag", $data);
    
        }

}



?>