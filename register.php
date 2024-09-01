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
        <title>Registeration Page</title>
        <link rel="stylesheet" href="styles/base.css">
        <link rel="stylesheet" href="styles/themes/light_mode.css">
    </head>
    <body>
        <div class="header light-mode">
            <a href="/"><h1 class="heading">Php Login System</h1></a>
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
    </body>
</html>