<?php
    // Allow the config
    define('__CONFIG__', true);
    require_once "include/config.php";
    Page::ForceDashboard();
?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once 'include/header.php' ?>
    <title>Registeration Page</title>
</head>

<body>
    <div class="header light-mode">
        <a href="/">
            <h1 class="heading">Php Login System</h1>
        </a>
        <form method="POST" class="registeration-form js-register">
            <label for="username">Username</label>
            <input type="email" name="username" required="required">
            <label for="password">Password</label>
            <input type="password" name="password" required="required">
            <button type="submit">Register</button>
        </form>
        <div class="login-div">
            <label for="login">Already registered?</label>
            <a href="/login.php"><button name="login">Log In</button></a>
        </div>
    </div>
    <div class="js-error"></div>
    <?php require_once 'include/footer.php' ?>
</body>

</html>