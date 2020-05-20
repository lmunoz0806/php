<?php
 
// CONNECT TO MYSQL SERVER

// MYSQL Credentials 
$servername = "localhost";
$username = "username";
$password = "password";
$port = 3306;
$db = "database";

// Create a connection using default port
$conn = new mysqli($servername, $username, $password, $db);

// Create connection when using a different port 
//$conn = new mysqli($servername.':'.$port, $username, $password, $db);

// Check connection
if ($conn->connect_error){
  die ("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// QUERY YOUR DB

?>
