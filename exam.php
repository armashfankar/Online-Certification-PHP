<html><head><body>

<?php include "headexam.html" ?>

<center>
<form  method="post" action="check1.php"  name= testfrm>
<?php
session_start();

mysql_connect ("localhost","root","root")  or die (mysql_error());
mysql_select_db ("CLASSROOM");


$sql = mysql_query("SELECT * FROM test_conductor ORDER BY RAND() LIMIT 3");

echo "<table>
<tr>


<th>ONLINE TEST <br>(WARNING:do not refresh your page)</th>

</tr>";
$i=0;
$questidarray = array();
while ($row = mysql_fetch_array($sql))
{
$questidarray[$i] = $row['qid'];
echo  "<tr><td><br><br><br><br>"."<br>".$row['question']."</td>
     <td><br><br><br><br><input type='radio' value= '".$row['op1']."' name= 'cans{$i}'>".$row['op1']."</input></td>
     <td><br><br><br><br><input type='radio' value= '".$row['op2']."' name='cans{$i}'>" .$row['op2']."</input></td>
     <td><br><br><br><br><input type='radio' value= '".$row['op3']."' name='cans{$i}'>" .$row['op3']."</input></td>
     <td><br><br><br><br><input type='radio' value= '".$row['op4']."' name='cans{$i}'>" .$row['op4']."</input></td>
</tr>";
$i++;
}
echo "</table>";

?><br><br><br><br>	
<?php

print_r($questidarray);
for($i=0;$i<3;$i++)
{
?>
<input type="hidden" name="qid[]" value="<?php echo $questidarray[$i]; ?>" />
<?php
}

?>

<input name="Submit" size="10"  type="submit" value="Submit"/>

<?php include "foot.html"?>

</body>
</html>
