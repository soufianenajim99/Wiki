<?php

class Author extends Controller {


    public function wikis() {
      
      $this->view("author/wikis");
    }
    public function dashboard() {
      $this->view("author/dashboard");
    }
}