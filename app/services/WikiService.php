<?php




class WikiService implements WikiInterface{
    private $db;
private $conn;
public function __construct(){
$this->db = Database::getInstance();
$this->conn = $this->db->getConnection();
}

public function displayWiki(){
    $conn = $this->conn;
    $sql="SELECT wiki.*,user.user_fullname,category.category_name 
    FROM `wiki`
    JOIN user ON user.user_id=wiki.user_id
    JOIN category ON category.category_id=wiki.category_id";
    $result = $conn->prepare($sql);
    $result->execute();
    $data=$result->fetchAll(PDO::FETCH_OBJ);
    $conn=null;
    $result=null;
    return $data;
}
public function addWiki(Wiki $wiki){
    $conn = $this->conn;
    $sql= "
    INSERT INTO wiki (wiki_image, wiki_title, wiki_content,wiki_desc,category_id,user_id)
     VALUES (:wiki_image,:wiki_title,:wiki_content,:wiki_desc,:category_id,:user_id);";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ":wiki_image"=> $wiki->wiki_image,
        ":wiki_title"=> $wiki->wiki_title,
        ":wiki_desc"=> $wiki->wiki_desc,
        ":wiki_content"=> $wiki->wiki_content,
        ":category_id"=> $wiki->category_id,
        ":user_id"=> $wiki->user_id,
    ]);
    $conn = null;
    $stmt = null;

}
public function editWiki(Wiki $wiki,$id){

}
public function deleteWiki($id){

}

}


?>