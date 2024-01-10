<?php

class Admin extends Controller {
    public function dashboard() {
      $this->view("admin/dashboard");
    }
    public function categories() {
        $this->view("admin/categories");
    }
    public function tags() {
      $this->view("admin/tags");
    }
    public function users() {
      $this->view("admin/users");
    }
    public function wikis() {
      $this->view("admin/wikis");
    }

}