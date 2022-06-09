<?php
$servername = "https://demosrv588.database.windows.net/";
$username = "demoadmin588v";
$password = "asdf@123";
$dbname = "demodb588";

// Create connection
$conn = new mysqli($servername,
$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: "
. $conn->connect_error);
}
$sql="INSERT INTO nametable (fname, lname)
VALUES
('$_POST[fname]','$_POST[lname]')";
?>
