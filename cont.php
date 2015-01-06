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

$sql="INSERT INTO cont(name1,email,website,subject,message1) 
VALUES
('$_POST[name1]','$_POST[email]','$_POST[website]','$_POST[subject]',
'$_POST[message1]')"; 


if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
header('Location:index.php');
mysql_close($con)
?> 
