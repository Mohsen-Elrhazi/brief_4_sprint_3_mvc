<?php 
require_once '../../config/config.php';

require_once '../../models/User.php'; 

class userController{
   
    
    public function save(User $user){
        $conn=DataBase::getConnection();
        $stmt=$conn->prepare("INSERT into users(username, email, password) VALUES(:username, :email,:password)");
        $stmt->execute([
            ':username' =>$user->getUserName(),
            ':email' =>$user->getEmail(),
            ':password'=>$user->getPassword(),

        ]);
    }

    
    public function displayAll() {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT userID, username, email, role, status  FROM users where role='client' and status='active' ");
        $stmt->execute(); 
        $data = [];
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $data[] = new User($user['username'], $user['email'], null, $user['userID'], $user['role'], $user['status']);

        }
        return $data;
    }

    public function rendreRow(User $user) {
        return "<tr>
                    <td>".$user->getUserName()."</td>
                    <td>" . $user->getEmail(). "</td>
                    <td>" .$user->getRole(). "</td>
                    <td>" .$user->getStatus(). "</td>
                    <td>
                   <a class='btn btn-primary text text-light text-decoration-none px-4'href='?page=client&id=".$user->getUserID()."'>Activer</a>
                    <a class='btn btn-danger text text-light text-decoration-none' href='?page=client&?id=".$user->getUserID()."'  onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer ce client ?\")' >Desactiver</a>
                    </td>
               </tr>";
        } 





}

?>