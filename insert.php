<?php
$servername = "tcp:demosrv588.database.windows.net,1433";
$username = "demoadmin588v";
$password = "asdf@123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
