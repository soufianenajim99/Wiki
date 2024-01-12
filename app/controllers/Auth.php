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
    $_SESSION["user_fullname"] = $user->user_fullname;
    $_SESSION["user_email"] = $user->user_email;
    // header("Location:".URLROOT."client/product");
}

public function logout(){
        unset($_SESSION["Id_user"]);
        unset($_SESSION["user_fullname"]);
        unset($_SESSION["user_email"]);
        session_destroy();
    header("Location:".URLROOT."auth/login");
}

public static function islogged(){
    if(isset($_SESSION["Id_user"])){
        return true;
    }else{
        return false;
    }
}

public function dashred($id){
    if($this->UsersService->isAuthor($id)){
        header("Location:".URLROOT."author/dashboard");
    }else{
        header("Location:".URLROOT."admin/dashboard");

    }

}


}

?>