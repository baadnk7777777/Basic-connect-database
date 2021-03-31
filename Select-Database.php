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

 $sql  = "SELECT id, firstname, lastname FROM MyGuests";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
     // output data of each row

     while($row = $result->fetch_assoc()) {
         echo "Id: " . $row["id"]. "- Name: " .$row["firstname"]. " ". $row["lastname"]. "<br>";
        // $row["..ชื่อคอลัม.."]
     }
 } else {
     echo "0 results";
 }
 $conn->close();
?>