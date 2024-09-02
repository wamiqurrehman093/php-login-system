<?php
    // Allow the config
    define('__CONFIG__', true);
    require_once "../include/config.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        header('Content-Type: application/json');
        $return = [];
        $email = Filter::String($_POST['email']);
        $password = $_POST['password'];
        $user_found = FindUser($con, $email, true);
        if ($user_found)
        {
            $user_id = (int)$user_found['user_id'];
            $hash = $user_found["password"];
            if (password_verify($password, $hash))
            {
                $return['redirect'] = '/dashboard.php';
                $return['is_logged_in'] = true;
                $_SESSION['user_id'] = $user_id;
            }
            else
            {
                $return['error'] = "Invalid email / password.";
                $return['is_logged_in'] = false;
            }
        }
        else
        {
            $return['error'] = "You do not have an account. <a href='/register.php'><button>Create one now?</button></a>";
        }
        echo json_encode($return, JSON_PRETTY_PRINT);
        exit;
    }
    else
    {
        exit('Invalid URL');
    }
?>