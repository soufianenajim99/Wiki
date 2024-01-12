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

public function displayFewWiki(){
    $conn = $this->conn;
    $sql="SELECT wiki.*,user.user_fullname,category.category_name 
    FROM `wiki`
    JOIN user ON user.user_id=wiki.user_id
    JOIN category ON category.category_id=wiki.category_id
    LIMIT 6;";
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
    $conn= $this->conn;
    $sql = "DELETE FROM wiki WHERE wiki_id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([  
        ":id"=>$id
      ]);
    $conn = null;
    $stmt = null;


}

public function getWiki($id){
    $conn = $this->conn;
    $sql="SELECT wiki.*,user.user_fullname,category.category_name 
    FROM `wiki`
    JOIN user ON user.user_id=wiki.user_id
    JOIN category ON category.category_id=wiki.category_id
    WHERE wiki_id=:id";
    $result = $conn->prepare($sql);
    $result->execute([
        ":id"=> $id
    ]);
    $data=$result->fetch(PDO::FETCH_OBJ);
    $conn=null;
    $result=null;
    return $data;
}



public function getAuthorWiki($id){
        $conn = $this->conn;
        $sql="SELECT wiki.*,user.user_fullname,category.category_name 
        FROM `wiki`
        JOIN user ON user.user_id=wiki.user_id
        JOIN category ON category.category_id=wiki.category_id
        WHERE wiki.user_id=:id";
        $result = $conn->prepare($sql);
        $result->execute([
            ":id"=> $id
        ]);
        $data=$result->fetchAll(PDO::FETCH_OBJ);
        $conn=null;
        $result=null;
        return $data;
    
}

public function latestwiki(){
    $conn = $this->conn;
    $sql="SELECT wiki.*,user.user_fullname,category.category_name 
    FROM `wiki`
    JOIN user ON user.user_id=wiki.user_id
    JOIN category ON category.category_id=wiki.category_id
    ORDER BY wiki_id DESC";
    $result = $conn->prepare($sql);
    $result->execute();
    $data=$result->fetchAll(PDO::FETCH_OBJ);
    $conn=null;
    $result=null;
    return $data;
}

public function latestcate(){
    $conn= $this->conn;
    $sql = "SELECT * FROM category ORDER BY category_id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    $conn = null;
    $stmt = null;
    return $result;
}



public function lastid(){
    $conn= $this->conn;
    $sql= "SELECT * FROM `wiki` ORDER BY wiki_id DESC LIMIT 1;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();   
    $result = $stmt->fetch(PDO::FETCH_OBJ);
     return $result;    
}


public function addtagwiki(TagWiki $TagWiki){
    $conn= $this->conn;
    $sql = "INSERT INTO wikitags (wiki_id,tag_id) VALUES (:wiki_id,:tag_id)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ":tag_id"=> $TagWiki->tag_id,
        ":wiki_id"=> $TagWiki->wiki_id,
    ]);
    $conn = null;
    $stmt = null;

}
public function deletetagwiki($id){
    $conn= $this->conn;
    $sql = "DELETE FROM tag WHERE tag_id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([  
        ":id"=>$id
      ]);
    $conn = null;
    $stmt = null;
}

public function tagwiki($id){
    $conn= $this->conn;
    $sql = "";
}



}


?>