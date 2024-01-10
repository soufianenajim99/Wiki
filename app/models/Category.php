<?php

class Category {
    private $category_id;
    private $category_name;
    private $category_desc;

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