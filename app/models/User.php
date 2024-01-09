<?php

class User {
   
   private $user_id;
   private $user_fullname;
   private $user_email;
   private $user_pwd;
   private $user_role;

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