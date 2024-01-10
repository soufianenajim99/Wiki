<?php

class Auth extends Controller{

    private $UsersService;
    public function __construct(){     
        $this->UsersService = new UserService();  

    }


public function login(){
    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $email=$_POST["email"];
        $password=$_POST["password"];
        $loggedInUser=$this->UsersService->login($email,$password);
        if($loggedInUser){
            if($this->UsersService->isClient($loggedInUser->id)){
                $this->createSession($this->UsersService->login($email,$password));
                header("Location:".URLROOT."client/product");
            }else{
                $this->createSession($this->UsersService->login($email,$password));
                header("Location:".URLROOT."admin/products");

            }


        $this->view("auth/login");

    }else{
      echo "error";
        $this->view("auth/login");
    }

}
    $this->view("auth/login");
}  

public function register(){
    $this->view("auth/register");


}
}

?>