  
<?php

class Database {
    private static $dsn = 'mysql:host=eyw6324oty5fsovx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=sx8o31qj3imbsc4z';
    private static $username = 'vi07uqbw6iakj2kg';
    private static $password = 'vtim3w5bc6tpch8f';
    private static $db;

    private function __construct() {}

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch (PDOException $e) {
                $error_msg = 'Database Error: ' ;
                $error_msg .= $e->getMessage();
                echo $error_msg;
                exit();
        }
    }
        return self::$db;
}
}
