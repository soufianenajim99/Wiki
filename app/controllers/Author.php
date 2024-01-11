<?php

class Author extends Controller {


    public function wiki() {
      
      $this->view("author/wiki");
    }
    public function dashboard() {
      $this->view("author/dashboard");
    }
}