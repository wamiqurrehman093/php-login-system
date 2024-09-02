<?php
    // Allow the config
    define('__CONFIG__', true);
    require_once "include/config.php";
?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once 'include/header.php' ?>
    <title>Login Page</title>
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
    <?php require_once 'include/footer.php' ?>
</body>

</html>