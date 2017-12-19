<?php

namespace database;

class dbConn
{
    protected static $db;

    private function __construct()
    {
        try {
            self::$db = new \PDO('mysql:host=' . CONNECTION . ';dbname=' . DATABASE, USERNAME, PASSWORD);
            self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }

    public static function getConnection()// establishing the connection with db
    {
        if (!self::$db) {
            
            new dbConn();
        }
        
        return self::$db;
    }
}
?>
