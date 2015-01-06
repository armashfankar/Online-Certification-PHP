



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



$sql="select distinct tc.cans,t.cans from test t, reg r,test_conductor tc where t.id={$studentid} and t.cans=tc.cans  ";

/*
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
*/
$result = mysql_query($sql,$con);
$row_no = mysql_num_rows($result);
$sql="update reg set marks='{$row_no}' where id=$studentid";
mysql_query($sql);
header('Location:cert.php');
mysql_close($con)





?>


