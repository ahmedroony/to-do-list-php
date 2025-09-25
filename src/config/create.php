<?php
namespace ToDoList\Ahmed\src\config;
    require_once("src/config/conn.php");
    $Tasks = "CREATE TABLE Task(
    ID INT AUTO_INCREMENT  PRIMARY KEY
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
    //check the errors
    $errors = "";
    if(!isset($_POST['submit'])){
        $errors = "you must fill the task";
    }else{
        $task = $_POST['task'];
        $sql  = "INSERT INTO Tasks (task) VALUES ('$task')";
        header('location:src/views/index.php');
    }
?>