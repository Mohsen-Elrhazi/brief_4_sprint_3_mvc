<?php 
require_once '../../../controllers/UserController.php';
require_once '../../../models/User.php';
require_once '../../../config/config.php';

if (isset($_POST['register'])){
    $name=htmlspecialchars($_POST['username']);
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);
    $passwordHached=password_hash($password,PASSWORD_DEFAULT);

    if(empty($name) || empty($email) || empty($password)){
        echo "<div class='alert alert-danger text-center'>Veuillez remplir tous les champs</div>";
    }else{
        $conn=Database::getConnection();

        $stmt=$conn->prepare("select * from users where email = :email");
        $stmt->execute([
            ':email'=> $email
        ]);
        if($stmt->rowCount()> 0){
       echo "<div class='alert alert-danger text-center'>Cet email est déja utilisé</div>";
        }else{
            $userController=new UserController();
            $user=new User($name, $email, $passwordHached);
            $userController->save($user);
           echo "<div class='alert alert-success text-center'>Vous etes enregistrer</div>";
        }     
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../assets/css/auth/register.css" />
    <!-- link cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Registration Form</title>
</head>

<body>

    <div class="register-container">
        <div class="form-container">
            <h1>Registration</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>
                <button type="submit" name="register" class="btn">Sign Up</button>
            </form>
            <div class="options">
                <p>Already have an account? <a href="form_login.php">Log In</a></p>
                <p><a href="form_forgot_password.php">Forgot Password?</a></p>
            </div>
        </div>
    </div>

    <script src="../../../assets/js/auth.js">
    </script>
</body>

</html>