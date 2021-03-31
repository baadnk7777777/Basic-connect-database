<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename ="Basicdata";
    // ระบุ ชื่อ database;


    // Create connection
    $conn = new mysqli($servername, $username, $password, $databasename);
    //"localhost", "root", ""

    // Check connection

    if($conn->connect_error) {
        die("Connection Failed:".$conn->connect_error);
    }


    // $sql เอาไว้ใส่คำสั่งเหมือนใน sql
    $sql ="CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lasname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    if($conn->query($sql) == TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating Table :". $conn->error;
    }

    $conn->close();

?>