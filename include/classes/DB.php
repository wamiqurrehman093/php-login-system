<?php
    // If there is no constant defined called __CONFIG__, do not load this file
    if (!defined('__CONFIG__'))
    {
        exit("You do not have a config file");
    }
    class DB
    {
        protected static $con;
        private function __construct()
        {
            try
            {
                self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_system', 'admin', 'Admin_1234');
            }
            catch (PDOException $e)
            {
                echo "Could not connect to database.\r\n";
                echo "Exception:<br />" . $e;
                exit;
            }
        }
        public static function getConnection()
        {
            if (!self::$con)
            {
                new DB();
            }
            return self::$con;
        }
    }
?>