<?php
session_start();
$host="localhost";
$user="root";
$pass="root";
$con = mysql_connect("$host","$user","$pass");


if (!$con)
  {

echo "Error in DBConnect() = " . mssql_get_last_message();
  die('Could not connect: ' . mysql_error());

  }

$studentid = $_SESSION['s_id'];

mysql_select_db("CLASSROOM", $con);

$sql="INSERT INTO test(id,qid,ans) 
VALUES
('$studentid','$_POST[qid]','$_POST['ans]')"; 


if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
header('Location:login.php');
mysql_close($con)
?> 
