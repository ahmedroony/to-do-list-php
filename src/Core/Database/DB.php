<?php
namespace ToDoList\Ahmed\Core\Database;

use mysqli;
use ToDoList\Ahmed\Config\DbConfig;

class DB
{
    public function conn(){
        $ConfigOne = new DbConfig();
        return new mysqli(
            $ConfigOne->hostname,
            $ConfigOne->username,
            $ConfigOne->password,
            $ConfigOne->servername, 
        );
    }
    public function query($sql){
        return $this->conn()->query($sql);
    }
}

