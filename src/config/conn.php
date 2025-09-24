<?php
    $servername = "%todolist";
    $username = "ahmed1";
    $password = "123456789";
    $conn = new mysqli($servername , $username , $password);
    if($conn->connect_error){
        die("connection failed" . $conn->connect_error);
    }
    echo "connected successfully";
    $conn->close();
    //create DB
    $sql = "CREATE DATABASE %todolist";
?>