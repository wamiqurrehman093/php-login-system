<?php
    // Allow the config
    define('__CONFIG__', true);
    require_once "include/config.php";
    Page::ForceLogin();
    $user_id = $_SESSION['user_id'];
    $User = new User($user_id);
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
            <p><b><?php echo $User->email ?></b> registered on <?php echo $User->reg_time ?></p>
        </div>
        <div class="logout-div">
            <a href="/logout.php"><button name="logout">Logout</button></a>
        </div>
    </div>
    <?php require_once 'include/footer.php' ?>
</body>

</html>