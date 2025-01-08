<?php 
require_once '../../../config/config.php';

require_once '../../../models/User.php'; 

class userController{
   
    
    public function save(User $user){
        $conn=DataBase::getConnection();
        $stmt=$conn->prepare("INSERT into users(username, email, password) VALUES(:username, :email,:password)");
        $stmt->execute([
            ':username' =>$user->getUserName(),
            ':email' =>$user->getEmail(),
            ':password'=>$user->getPassword(),
            // ':role'=>$user->getRole(),
            // 'status'=>$user->getStatus()
        ]);
    }
}

?>