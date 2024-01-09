<?php

class TagService implements TagInterface {

    private $db;
    private $conn;
    public function __construct(){
    $this->db = Database::getInstance();
    $this->conn = $this->db->getConnection();
  }

  public function displayTag(){

  }
  public function addTag(Tag $tag){

  }
  public function editTag(Tag $tag,$id){

  }
  public function deleteTag($id){

  }


}