<?php
namespace Helper;

class Connection
{
    private static $connection = null;
    private function __construct()
    {
    }

    public static function get()
    {
        if (!self::$connection) {
            try {
                self::$connection = new \PDO('mysql:host=localhost;dbname=kandt;port=3306', 'root','root');
                self::$connection->exec("SET NAMES UTF8");
            } catch (\PDOException $exception) {
                echo "Fatal error.";
                exit;
            }
        }
        return self::$connection;
    }
}