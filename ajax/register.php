<?php
    // Allow the config
    define('__CONFIG__', true);
    require_once "../include/config.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        header('Content-Type: application/json');
        $return = [];
        $email = Filter::String($_POST['email']);
        $findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();
        if ($findUser->rowCount() == 1)
        {
            $return['error'] = "You already have an account.";
            $return['is_logged_in'] = false;
        }
        else
        {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
            $addUser->bindParam(':email', $email, PDO::PARAM_STR);
            $addUser->bindParam(':password', $password, PDO::PARAM_STR);
            $addUser->execute();
            $userId = $con->lastInsertId();
            $_SESSION['user_id'] = (int)$userId;
            $return['redirect'] = '/dashboard.php?message=welcome';
            $return['is_logged_in'] = true;
        }
        echo json_encode($return, JSON_PRETTY_PRINT);
        exit;
    }
    else
    {
        exit('Invalid URL');
    }
?>