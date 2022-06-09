<?php
$servername = "tcp:demosrv588.database.windows.net,1443";
$username = "demoadmin588v";
$password = "asdf@123";
$dbname = "demodb588";
//echo "jignesh";
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
