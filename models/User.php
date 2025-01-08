<?php 

class User{
    private $userID;
    private $username;
    private $email;
    private $password;
    private $role;
    private $status;


    public function __construct($username, $email, $password,$id=null){
        $this->id=$id;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
    }

    public function getUserID(){
        return $this->userID;
    }

    public function getUserName(){
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getRole(){
        return $this->role;
    }

    public function getStatus(){
        return $this->status;
    }
    
}

?>