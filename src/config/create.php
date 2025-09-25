<?php
namespace ToDoList\Ahmed\config;
    $Tasks = "CREATE TABLE Task(
    ID INT AUTO_INCREMENT  PRIMARY KEY,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
    //check the errors
    $errors = "";
    if(!isset($_POST['submit'])){
        $errors = "you must fill the task";
    }else{
        $task = $_POST['task'];
        $sql  = "INSERT INTO Task (task) VALUES ('$task')";
        header('location:src/public/index.php');
    }
?>