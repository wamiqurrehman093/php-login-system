<?php
    // Allow the config
    define('__CONFIG__', true);
    require_once "include/config.php";
    ForceDashboard();
?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once 'include/header.php' ?>
    <title>Login Page</title>
</head>

<body>
    <div class="header light-mode">
        <a href="/">
            <h1 class="heading">Php Login System</h1>
        </a>
        <form method="POST" class="login-form js-login">
            <label for="username">Username</label>
            <input type="email" name="username" required="required">
            <label for="password">Password</label>
            <input type="password" name="password" required="required">
            <button type="submit">Log In</button>
        </form>
        <div class="register-div">
            <label for="register">New here?</label>
            <a href="/register.php"><button name="register">Register</button></a>
        </div>
    </div>
    <div class="js-error"></div>
    <?php require_once 'include/footer.php' ?>
</body>

</html>