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
    $sql ="INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Tanakan', 'Khongfai', 'banktv76@gmail.com')";



    if($conn->query($sql) == TRUE) {
        $last_id  = $conn->insert_id;
        echo "New insert successfully. Last inserted ID is: ".$last_id;
    } else {
        echo "Error creating Table :".$sql . "<br>". $conn->error;
    }

    $conn->close();

?>