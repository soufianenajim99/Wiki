<?php

class TagService implements TagInterface {

    private $db;
    private $conn;
    public function __construct(){
    $this->db = Database::getInstance();
    $this->conn = $this->db->getConnection();
  }

  public function displayTag(){
    $conn= $this->conn;
    $sql = "SELECT * FROM tag";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    $conn = null;
    $stmt = null;
    return $result;

  }
  public function addTag(Tag $tag){
    $conn= $this->conn;
        $sql = "INSERT INTO tag (tag_name) VALUES (:tag_name)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":tag_name"=> $tag->tag_name,
        ]);
        $conn = null;
        $stmt = null;

  }
  public function editTag(Tag $tag,$id){
    $conn= $this->conn;
        $sql = "UPDATE tag SET tag_name=:tag_name WHERE tag_id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([  
            ":tag_name"=> $tag->tag_name,
            ":id"=>$id
          ]);
        $conn = null;
        $stmt = null;

  }
  public function deleteTag($id){
    $conn= $this->conn;
        $sql = "DELETE FROM tag WHERE tag_id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([  
            ":id"=>$id
          ]);
        $conn = null;
        $stmt = null;

  }

  public function getTag($id){
    $conn= $this->conn;
    $sql = "SELECT * FROM tag WHERE tag_id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([  
        ":id"=>$id
      ]);
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $conn = null;
    $stmt = null;
    return $result;
}


}