<?php
    function ForceLogin()
    {
        if (isset($_SESSION['user_id']))
        {
    
        }
        else
        {
            header('Location: /login.php');
            exit;
        }
    }
    function ForceDashboard()
    {
        if (isset($_SESSION['user_id']))
        {
            header('Location: /dashboard.php');
            exit;
        }
        else
        {

        }
    }
?>