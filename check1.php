<?php
session_start();
$host="localhost";
$user="root";
$pass="root";

$con = mysql_connect("$host","$user","$pass");

if (!$con)
  {

echo "Error in DBConnect() = " . mysql_get_last_message();
  die('Could not connect: ' . mysql_error());

  }


$studentid = $_SESSION['s_id'];
mysql_select_db("CLASSROOM", $con);

$q_id = array();
$q_id[]= $_POST[qid];
//print_r($q_id);
//$_POST[cans0];
//echo $_POST[cans1];
//echo $_POST[cans2];

$sql1="INSERT INTO test VALUES($studentid,{$q_id[0][0]},'$_POST[cans0]')"; 
$sql2="INSERT INTO test VALUES($studentid,{$q_id[0][1]},'$_POST[cans1]')"; 
$sql3="INSERT INTO test VALUES($studentid,{$q_id[0][2]},'$_POST[cans2]')"; 

if (!mysql_query($sql1,$con))
{
die('Error: ' . mysql_error());
}
if (!mysql_query($sql2,$con))
{
die('Error: ' . mysql_error());
}
if (!mysql_query($sql3,$con))
{
die('Error: ' . mysql_error());
}

header('Location:res.php');
mysql_close($con)

?> 
