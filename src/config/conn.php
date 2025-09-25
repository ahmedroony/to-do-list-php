<?php
namespace ToDoList\Ahmed\config;
class conn {
       public $servername;
       public $username;
       public $password;
   public function __construct($servername,$username,$password)
   {
        $this->servername  = $servername;
        $this->username = $username;
        $this->password = $password;
   }
   public function connect(){
    $conn = new mysqli($this->servername , $this->username , $this->password);
    if($this->$conn->connect_error){
        die("connection failed" . $conn->connect_error);
    }
    echo "connected successfully";
    //create DB
    $sql = "CREATE DATABASE IF NOT EXISTS todolist2";
    if($conn->query($sql) === TRUE){    
        echo "db created";
    }else{
        echo "failed to create db";
    }
    $conn->close();
   }
}
$connOne = new conn("localhost","ahmed22","123456789");
$connOne->connect();
?>