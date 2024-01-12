<?php

class Author extends Controller {
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

    public function wikis() {
      $wi=$this->wikiSer->displayWiki();
      $cats=$this->categoryService->displayCategory();
      $data=[
        "cats"=> $cats,
        "wiki"=> $wi
      ];
      $this->view("author/wikis", $data);
    }
    public function dashboard() {
      $this->view("author/dashboard");
    }
 
    public function addWiki(){
      if($_SERVER["REQUEST_METHOD"] === "POST" ){
        $newWiki = $this->model("Wiki");
        echo "<pre>";
        var_dump($_POST);
        var_dump($_FILES["image"]["tmp_name"]);
        var_dump($_FILES);
        echo "</pre>";
        move_uploaded_file($_FILES["image"]["tmp_name"],'C:\xampp\htdocs\Wiki\public\img\\'.$_FILES["image"]["name"]);

                   $newWiki->wiki_image = URLIMG.$_FILES["image"]["name"];
                   $newWiki->wiki_title = $_POST["titre"];
                   $newWiki->wiki_desc = $_POST["desc"];
                   $newWiki->wiki_content = $_POST["content"];
                   $newWiki->category_id = $_POST["Category"];
                   $newWiki->user_id = $_SESSION["Id_user"];
                   $newWiki->wiki_statut = 1;
                   try{
                    $this->wikiSer->addWiki($newWiki);
                    header("Location:".URLROOT."author/wikis");
                   }
                   catch(PDOException $e){
                    die($e->getMessage());
                   }
      }
      $cats=$this->categoryService->displayCategory();
      $tags=$this->tagSer->displayTag();
      $data=[
        "tag"=> $tags,
        "cats"=> $cats,
      ];
      $this->view("author/addWiki",$data);
    }

}