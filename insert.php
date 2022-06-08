<?php
$con = mysql_connect("tcp:demosrv588.database.windows.net,1433","demoadmin588v","asdf@123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("cis_id", $con);
$sql="INSERT INTO nametable (fname, lname)
VALUES
('$_POST[fname]','$_POST[lname]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
mysql_close($con)
?>
</body>
</html>
