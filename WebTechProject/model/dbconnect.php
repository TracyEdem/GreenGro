<?php
//     require("dbcredentials.php");

// Create connection
    $conn = new mysqli("localhost", "root", "mydbp@ssword", "greengro");
    // Check if connection is successful
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error."<br>");
      }
    else{  
      echo "Successful connection!<br>";
    }

?>
