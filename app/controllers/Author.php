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
      $wi=$this->wikiSer->getAuthorWiki($_SESSION["Id_user"]);
      $cats=$this->categoryService->displayCategory();
      $data=[
        "cats"=> $cats,
        "wiki"=> $wi
      ];
      $this->view("author/wikis", $data);
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

      $this->view("author/dashboard", $data);
    }
 
    public function addWiki(){
      if($_SERVER["REQUEST_METHOD"] === "POST" ){
        $newWiki = $this->model("Wiki");
        echo "<pre>";
        foreach($_POST["tags"] as $tag){

          var_dump($tag);
        }
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
                    }
                    catch(PDOException $e){
                      die($e->getMessage());
                    }
                    $wikiId = $this->wikiSer->lastid();
                    echo"<pre>";
                    var_dump($wikiId);
                    echo"</pre>";
                   foreach($_POST['tags'] as $tag){
                    // die("here");
                    $tagObj = $this->model("TagWiki");
                    $tagObj->tag_id=$tag;
                    $tagObj->wiki_id=$wikiId->wiki_id;

                    $this->wikiSer->addtagwiki($tagObj);
                    header("Location:".URLROOT."author/wikis");
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

    public function editWiki($id){
      if($_SERVER["REQUEST_METHOD"] === "POST" ){
        $newWiki = $this->model("Wiki");
        echo "<pre>";
        foreach($_POST["tags"] as $tag){

          var_dump($tag);
        }
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
                     $this->wikiSer->editWiki($newWiki,$id);
                    }
                    catch(PDOException $e){
                      die($e->getMessage());
                    }
                   foreach($_POST['tags'] as $tag){
                    // die("here");
                    $tagObj = $this->model("TagWiki");
                    $tagObj->tag_id=$tag;
                    $this->wikiSer->edittagwiki($tagObj,$id);
                    header("Location:".URLROOT."author/wikis");
                }
      }
      $cats=$this->categoryService->displayCategory();
      $tags=$this->tagSer->displayTag();
      $wiki=$this->wikiSer->getWiki($id);
      $data=[
        "tag"=> $tags,
        "cats"=> $cats,
        "wiki"=> $wiki,
      ];

      $this->view("author/editWiki",$data);

    }

}