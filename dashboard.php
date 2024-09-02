<?php
    // Allow the config
    define('__CONFIG__', true);
    require_once "include/config.php";
    ForceLogin();
    $user_id = $_SESSION['user_id'];
    $getUserInfo = $con->prepare("SELECT email, reg_time FROM users WHERE user_id = :user_id LIMIT 1");
    $getUserInfo->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $getUserInfo->execute();
    if ($getUserInfo->rowCount() == 1)
    {
        $User = $getUserInfo->fetch(PDO::FETCH_ASSOC);

    }
    else
    {
        header("Location: /logout.php");
        exit;
    }
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
            <p><b><?php echo $User['email'] ?></b> registered on <?php echo $User['reg_time'] ?></p>
        </div>
        <div class="logout-div">
            <a href="/logout.php"><button name="logout">Logout</button></a>
        </div>
    </div>
    <?php require_once 'include/footer.php' ?>
</body>

</html>