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
        // var_dump($this->UsersService->isAuthor($loggedInUser->user_id));
        if($loggedInUser){
            if($this->UsersService->isAuthor($loggedInUser->user_id)){
                $this->createSession($this->UsersService->login($email,$password));
                header("Location:".URLROOT."author/dashboard");
            }else{
                $this->createSession($this->UsersService->login($email,$password));
                header("Location:".URLROOT."admin/dashboard");

            }
    }else{
        $this->view("auth/login");
    }

}
    $this->view("auth/login");
}  

public function register(){
    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        var_dump($_POST);
        $fullname = $_POST["fullname"];
        $Email = $_POST["email"];
        $password = $_POST["password"];
        $newuser = new User();
        $newuser->user_fullname = $fullname;
        $newuser->user_email = $Email;
        $newuser->user_pwd = $password;
        try{
            $this->UsersService->addUser($newuser);
            header("Location:".URLROOT."auth/login");
           }
           catch(PDOException $e){
            die($e->getMessage());
           }
    }
    $this->view("auth/register");
}








public function createSession($user){
    $_SESSION["Id_user"] = $user->user_id;
    // header("Location:".URLROOT."client/product");
}

public function destroySession($user){
        unset($_SESSION["Id_user"]);
        session_destroy();
    header("Location:".URLROOT."auth/login");
}

public function islogged(){
    if(isset($_SESSION["Id_user"])){
        return true;
    }else{
        return false;
    }
}


}

?>