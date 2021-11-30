<?php
$servername = "localhost";
$username = "smalltown";  //root
$password = "smalltown"; //aurora
$database = "smalltown";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully 1";
?>