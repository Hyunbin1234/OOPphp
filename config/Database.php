<?php

class Database
{
    private static $host = 'localhost';
    private static $dhname = 'bukuaku';
    private static $user = 'root';
    private static $password = '';
    private static $conn;

    public static function connect()
    {

        if (self::$conn == null) {
            try {
                self::$conn = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dhname, self::$user, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo 'Connected';
            } catch (PDOException $e) {
                echo 'Connection Error: ' . $e->getMessage();
            }
        }

        return self::$conn;
    }
}