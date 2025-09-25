<?php
namespace ToDoList\Ahmed\config;
class conn {
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "todolist";
    public function conn(){
        $conn = new \mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if($conn->connect_error){
            ("pls check") . $conn->connect_error;
        }
    }
}
