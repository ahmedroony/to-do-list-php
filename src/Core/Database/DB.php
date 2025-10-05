<?php
namespace ToDoList\Ahmed\Core\Database;
class DB {
    //new construct feature in php 8 
    public function __construct
    (
    private $hostname ,
    private $username ,
    private $password ,
    private $database ,
    ){

    }
    private function conn(){
        $conn = new \mysqli(
            $this->hostname,
            $this->username,
            $this->password,
            $this->database
        );
        return $conn;
    }
    public function create($sql){
        $this->conn()->query($sql);
        $this->conn()->close();
    }
}
