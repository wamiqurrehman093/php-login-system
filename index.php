<?php
// Allow the config
define('__CONFIG__', true);
require_once "include/config.php"
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/themes/light_mode.css">
</head>

<body>
    <div class="header light-mode">
        <a href="/"><h1 class="heading">Php Login System</h1></a>
        <div class="login-div">
            <a href="/login.php"><button name="login">Log In</button></a>
        </div>
        <div class="register-div">
            <a href="/register.php"><button name="register">Register</button></a>
        </div>
    </div>
</body>

</html>