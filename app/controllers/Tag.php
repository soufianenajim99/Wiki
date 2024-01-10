<?php

class Tags extends Controller{
    private $tagSer;
    public function __construct(){
      $this->tagSer = new TagService();
    }

    public function index(){
        
    }

}



?>