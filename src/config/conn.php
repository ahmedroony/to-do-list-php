<?php
namespace ToDoList\Ahmed\config;
class Conn {
    public $servername = "localhost";
    public $username = "ahmed22";
    public $password = "";
    public $dbname = "todolist";
    public function Conn(){
        $conn = new \mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if($conn->connect_error){
            ("pls check") . $conn->connect_error;
        }
        return $conn;
    }
}
