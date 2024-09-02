<?php
    // Allow the config
    define('__CONFIG__', true);
    require_once "include/config.php";
    echo $_SESSION['user_id'] . ' is your user id';
    exit;
?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once 'include/header.php' ?>
    <title>Dashboard</title>
</head>

<body>
    <div class="header light-mode">
        <a href="/"><h1 class="heading">Php Login System</h1></a>
        <a href="/"><h2 class="heading">Dashboard</h2></a>
    </div>
    <?php require_once 'include/footer.php' ?>
</body>

</html>