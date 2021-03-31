<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename ="Basicdata";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $databasename);
     //"localhost", "root", ""

      // Check connection

    if($conn->connect_error) {
        die("Connection Failed:".$conn->connect_error);
    }

    //Prepare and bind

    $stmt = $conn->prepare ("INSERT INTO MyGuests (firstname, lastname, email) VALUE(?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    // set parameters and eexecute
    $firstname = "John";
    $lastname = "Doe";
    $email = "John@gmail.com";
    $stmt->execute();

    $firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

    echo "New records created successfully";
    
    $stmt->close();
    $conn->close();
?>