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
    VALUES ('lo', 'lo', 'lo@gmail.com');";

    $sql .="INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Meliodas', 'Meliodas', 'Meliodas@gmail.com');";

    $sql .="INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('ban', 'ban', 'ban@gmail.com')";



    if($conn->multi_query($sql) == TRUE) {
        $last_id  = $conn->insert_id;
        echo "New insert successfully. Last inserted ID is: ".$last_id;
    } else {
        echo "Error creating Table :".$sql . "<br>". $conn->error;
    }

    $conn->close();

?>