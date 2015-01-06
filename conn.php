<?php
$host="localhost";
$user="root";
$pass="root";
$con = mysql_connect("$host","$user","$pass");


if (!$con)
  {

echo "Error in DBConnect() = " . mssql_get_last_message();
  die('Could not connect: ' . mysql_error());

  }



mysql_select_db("CLASSROOM", $con);

$sql="INSERT INTO reg(username,passwd,gender,email,qua,mob) 
VALUES
('$_POST[username]','$_POST[passwd]','$_POST[gender]','$_POST[email]','$_POST[qua]','$_POST[mob]')"; 


if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
header('Location:index.php');
mysql_close($con)
?> 
