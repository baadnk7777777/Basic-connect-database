<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    //"localhost", "root", ""

    // Check connection

    if($conn->connect_error) {
        die("Connection Failed:".$conn->connect_error);
    }

    $sql = "CREATE DATABASE Basicdata";

    if($conn->query($sql) == TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database :". $conn->connect_error;
    }

    $conn->close();

?>