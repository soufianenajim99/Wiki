<?php

class UserService implements UserInterface {

    private $db;
    private $conn;
    public function __construct(){
    $this->db = Database::getInstance();
    $this->conn = $this->db->getConnection();
  }

    public function displayUser(){
        $conn= $this->conn;
        $sql = "SELECT * FROM user";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        $conn = null;
        $stmt = null;
        return $result;
    }
    public function addUser(User $user){
        $conn = $this->conn;
        $sql = "INSERT INTO user (user_fullname,user_email,user_pwd,user_role) VALUES (:user_fullname,:user_email,:user_pwd,'author')";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":user_fullname"=>$user->user_fullname,
            ":user_email"=>$user->user_email,
            ":user_pwd"=>password_hash($user->user_pwd,PASSWORD_DEFAULT) 
        ]);
        $conn = null;
        $stmt = null;

        
    }
    public function editUser(User $user,$id){
        
    }
    public function deleteUser($id){

        
    }



    public function login( $Email, $password){
        $conn = $this->conn;
        $query = "SELECT * FROM user WHERE user_email =:Email";
        $results = $conn->prepare($query);
        $results->execute([":Email"=> $Email]);
        $stmt= $results->fetch(PDO::FETCH_OBJ);
        $hashed_pass= $stmt->user_pwd;
        if(password_verify($password, $hashed_pass)){
            return $stmt;
        }else{
            return false;
        }
    }


    public function isAuthor($id){
        $conn=$this->conn;
        $query = "SELECT * FROM user WHERE user_id=:id AND user_role='author'";
        $results = $conn->prepare($query);
        $results->execute([":id"=> $id]);
        $results->fetch(PDO::FETCH_OBJ);

        if(   $results->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }



}








?>