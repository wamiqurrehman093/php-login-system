<?php
// Allow the config
define('__CONFIG__', true);
require_once "include/config.php";
ForceLogin();
?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once 'include/header.php' ?>
    <title>Dashboard</title>
</head>

<body>
    <div class="header light-mode">
        <a href="/dashboard.php">
            <h1 class="heading">Dashboard</h1>
        </a>
        <div class="login-div">
            <p>You're logged in in as user: <?php echo $_SESSION['user_id'] ?></p>
        </div>
        <div class="logout-div">
            <a href="/logout.php"><button name="logout">Logout</button></a>
        </div>
    </div>
    <?php require_once 'include/footer.php' ?>
</body>

</html>