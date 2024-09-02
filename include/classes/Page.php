<?php
    // If there is no constant defined called __CONFIG__, do not load this file
    if (!defined('__CONFIG__'))
    {
        exit("You do not have a config file");
    }
    class Page
    {
        public static function ForceLogin()
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
        public static function ForceDashboard()
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
    }
?>