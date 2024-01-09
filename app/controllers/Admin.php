<?php

class Admin extends Controller {
    public function dashboard() {
      $this->view("admin/dashboard");
    }
    public function categories() {
        $this->view("admin/categories");

    }
}