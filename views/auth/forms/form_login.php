<?php 
require_once '../../../controllers/UserController.php';
require_once '../../../models/User.php';
require_once '../../../config/config.php';

 if(isset($_POST['login'])){
     $email=$_POST['email'];
     $password=$_POST['password'];

     if(empty($email) || empty($password)){
        echo "<div class='alert alert-danger text-center'>Veuillez remplir tous les champs</div>";
    }else{
     $conn=DataBase::getConnection();
     $stmt=$conn->prepare("select email, password from users");
     $stmt->execute();
     if($stmt->rowCount() > 0){
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($products as $product) {
            $data[] = new Product($product['name'],$product['image'],$product['prix'], $product['quantity'],$product['id']);
        }
        return $data;
     
    }
 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../assets/css/auth/login.css" />

    <title>Login</title>

</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn" name="login">Log In</button>
        </form>
        <div class="options">
            <p><a href="form_forgot_password.php">Forgot Password?</a></p>
            <p>Don't have an account? <a href="form_register.php">Sign Up</a></p>
        </div>
    </div>

    <script src="../../../assets/js/auth.js">
    </script>
</body>

</html>