<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

class ConnectionData
{
    static $hostname = "127.0.0.1";
    static $username;
    static $password;
    static $database;

    public static function init()
    {
        self::$username = ($_SERVER['SERVER_NAME'] === 'localhost') ? "root" : "ics325fa2313";
        self::$password = ($_SERVER['SERVER_NAME'] === 'localhost') ? "password" : "5292";
        self::$database = ($_SERVER['SERVER_NAME'] === 'localhost') ? "pensive" : "ics325fa2313";
    }
}
ConnectionData::init();

?>