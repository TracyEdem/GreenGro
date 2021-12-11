<?php
//     require("dbcredentials.php");
//Credentials
define("Server", "localhost");
define("Username", "root");
define("Password", "mydbp@ssword");
define("Database","greengro");

// Create connection
    $conn = new mysqli(Server, Username, Password, Database);
    // Check if connection is successful
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error."<br>");
      }
    else{  
      echo "Successful connection!<br>";
    }

?>
