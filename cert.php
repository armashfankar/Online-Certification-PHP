 
<html><head><body>

<?php include "headcert.html" ?>


<center>
<table cellpadding="20" cellspacing="30" border="0" style="background:#ffffff url(images/page.gif);text-align:left;line-height:20px;">
                        <tr>
                            <td colspan="2"><h3 style="color:#0000cc;text-align:center;">CERTIFICATE</h3></td>
                        </tr>
                        <tr>
                            <td colspan="2" ><hr style="color:#ff0000;border-width:4px;"/></td>
                        </tr>
                        <tr>
                            <td>Student id</td>
                            <td><?php session_start();
					$studentid = $_SESSION['s_id'];
 		
 					echo $studentid; ?></td>
			
                        </tr>
                       <tr>
                            <td>Student name</td>
                            <td><?php 
  				
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
	
				$sql = "SELECT * from reg where id='{$studentid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
				echo $row['username'];
				$marks = $row['marks'];
				?></td>
			
                        </tr>
                     
	
                        <tr>
                            <td>Max. Marks</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Obtained Marks</td>
				<td><?php echo $marks; ?> </td>
				</tr>

  			<tr>
                            <td>Percentage</td>
                            <td><?php echo (($marks / 3) * 100) . " %"; ?></td>
                        </tr>
		<tr><td>
		<center>
		<A HREF="javascript:window.print()">Click to Print This Page</A>
		</center></td></tr>
</table>

<?php include "foot.html"?>

</body>
</html>
