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

     $sql = "SELECT id, firstname, lastname FROM MyGuests";
     $result = $conn->query($sql);

     if($result->num_rows > 0 ) {
         echo "<table> <tr> <th> ID </th><th>Name</th></tr>";
        
         //output 
         while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"] ."</td><td>".$row["firstname"] ."</td></tr>";
         }
         echo "</table>";
     } else {
         echo "0 result";
     }
     $conn->close();
?>