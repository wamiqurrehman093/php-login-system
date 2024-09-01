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
            <h1 class="heading">Login Page</h1>
            <form method="POST" class="login-form js-login">
                <label for="username">Username</label>
                <input type="email" name="username" required="required">
                <label for="password">Password</label>
                <input type="password" name="password" required="required">
                <button type="submit">Log In</button>
            </form>
            <div class="register-div">
                <label for="register">New here?</label>
                <button name="register">Register</button>
            </div>
        </div>
    </body>
</html>