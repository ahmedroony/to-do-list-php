<?php
namespace ToDoList\Ahmed\Core\Database;

use mysqli;
use ToDoList\Ahmed\Config\DbConfig;

class DB
{
    public static function conn(){
        $ConfigOne = new DbConfig();
        return new mysqli(
            $ConfigOne->hostname,
            $ConfigOne->username,
            $ConfigOne->password,
            $ConfigOne->servername, 
        );
    }
    public static function query($sql){
        return self::conn()->query($sql);
    }
}

