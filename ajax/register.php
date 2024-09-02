<?php
    // Allow the config
    define('__CONFIG__', true);
    require_once "../include/config.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        header('Content-Type: application/json');
        $return = [];
        $return['redirect'] = '/dashboard.php';
        $return['name'] = 'Wamiq Ur Rehman';
        echo json_encode($return, JSON_PRETTY_PRINT);
        exit;
    }
    else
    {
        exit('Not allowed');
    }
?>