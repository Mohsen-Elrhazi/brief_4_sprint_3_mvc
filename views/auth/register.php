<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/css/register.css" />

    <title>Registration Form</title>
</head>

<body>
    <div class="register-container">
        <div class="form-container">
            <h1>Registration</h1>
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
            </form>
            <div class="options">
                <p>Already have an account? <a href="login.php">Log In</a></p>
                <p><a href="forgot_password.php">Forgot Password?</a></p>
            </div>
        </div>
    </div>
</body>

</html>