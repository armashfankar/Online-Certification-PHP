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
mysql_select_db("CLASSROOM", $con);
$myusername=$_POST['username'];
$mypassword=$_POST['passwd'];



 $mysql = "SELECT * FROM reg WHERE username='$myusername' and passwd='$mypassword'";

 $result = mysql_query($mysql) or die("cannot execute query");

 $count = mysql_num_rows($result);
$row = mysql_fetch_array($result);
  
  $_SESSION['s_id'] = $row['id'];
 if($count==1)
 {
 //session_register('username');
	header("location:home1.php"); // put your home page neme here
}

 else
	header("location:login.php");

 ?>
