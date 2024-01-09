<?php

class Wiki {
    private $wiki_id;
    private $wiki_image;
    private $wiki_title;
    private $wiki_desc;
    private $wiki_content;
    private $category_id;
    private $user_id;
    private $wiki_statut;

    public function __construct() {
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
          return $this->$property;
        }
    }
    
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    
    }


}

?>