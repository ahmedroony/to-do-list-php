<?php
namespace ToDoList\Ahmed\config;
require_once('src/config/Conn.php');
class Create extends Conn{
    public function Create(){
    $Tasks = "CREATE TABLE `tasks` (
    `id` int(10) NOT NULL,
    `task` VARCHAR(255)NOT NULL,PRIMARY KEY (`id`)) 
    ENGINE= InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    $result = mysqli_query(conn, $Tasks);
    
    // $errors = "";
    // if(!isset($_POST['submit'])){
    //     $errors = "you must fill the task";
    // }else{
    //     $task = $_POST['task'];
    //     $sql  = "INSERT INTO Tasks (task) VALUES ('$task')";
    //     header('location:src/public/index.php');
    //     }
        // return $sql;
    }
}

