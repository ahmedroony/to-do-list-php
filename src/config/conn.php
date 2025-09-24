<?php
    $servername = "localhost";
    $username = "ahmed22";
    $password = "123456789";
    $conn = new mysqli($servername , $username , $password);
    if($conn->connect_error){
        die("connection failed" . $conn->connect_error);
    }
    echo "connected successfully";
    //create DB
    $sql = "CREATE DATABASE todolist2";
    if($conn->query($sql) === TRUE){    
        echo "db created";
    }else{
        echo "failed to create db";
    }
    $conn->close();
?>