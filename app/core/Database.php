<?php

namespace App\Core;

use PDO;

class Database{

    protected static $dsn = 'mysql:dbname=challenge;host=localhost';
    protected static $user = 'root';
    protected static $password = '';
    protected static $_instance;

    public static function getDB(){
        if(is_null(self::$_instance)){
            self::$_instance = new PDO(self::$dsn, self::$user, self::$password);  
        }
        return self::$_instance;
    }

}