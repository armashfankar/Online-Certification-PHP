<html><head><body>
<?php include "headexam.html"
?>



<center>

<?php
mysql_connect ("localhost","root","root")  or die (mysql_error());
mysql_select_db ("CLASSROOM");
 

 
$sql = mysql_query("SELECT question FROM test ORDER BY RAND() LIMIT 2");

 
echo "<table>
<tr>

<th>question</th>
</tr>";

while ($row = mysql_fetch_array($sql)){
echo 
 "</td><td><br>".$row['question']."<br><br>";

}
echo "</table>";

?>
   




<?php 

include "foot.html"?>

</body>
</html>
