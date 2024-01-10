<?php
class CateService implements CategoryInterface {

    private $db;
    private $conn;
    public function __construct(){
    $this->db = Database::getInstance();
    $this->conn = $this->db->getConnection();
  }

    public function displayCategory(){
        $conn= $this->conn;
        $sql = "SELECT * FROM category";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        $conn = null;
        $stmt = null;
        return $result;

    }
    public function addCategory(Category $category){
        $conn= $this->conn;
        $sql = "INSERT INTO category (category_name,category_desc) VALUES (:cate_name,:cate_desc)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":cate_name"=> $category->category_name,
            ":cate_desc"=> $category->category_desc,
        ]);
        $conn = null;
        $stmt = null;
    }
    public function editCategory(Category $category,$id){
        $conn= $this->conn;
        $sql = "UPDATE category SET category_name=:cate_name,category_desc=:cate_desc WHERE category_id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([  
            ":cate_name"=> $category->category_name,
            ":cate_desc"=> $category->category_desc,
            ":id"=>$id
          ]);
        $conn = null;
        $stmt = null;

    }
    public function deleteCategory($id){
        $conn= $this->conn;
        $sql = "DELETE FROM category WHERE category_id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([  
            ":id"=>$id
          ]);
        $conn = null;
        $stmt = null;

    }

    public function getCategory($id){
        $conn= $this->conn;
        $sql = "SELECT * FROM category WHERE category_id=:id";
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


?>