<html><head><body>
<?php include "headlog.html"?>

<script type="text/javascript"  >

function fun3()
{
	var username=document.frm.username.value;	
	var passwd=document.frm.passwd.value;
	
	
	
if(username=="")
	{
		alert("Enter  User Name ");
		return false;
	}


if(passwd=="")
	{
		alert("Enter  Password ");
		return false;
	}



	
}

</script>
<center>

<br><br>


<form  method="post" action="log.php" onSubmit="return fun3()" name= frm>



<table border="0">

<tbody>

<tr>
<td><label for="name"> <h5 class="tw_bullet">Username<font color="red">*</font>  </label> </td>
<td><input id="name" maxlength="45" name="username" type="text" /> </td>
</tr>

<tr>
<td><label for="name"> <h5 class="tw_bullet">password<font color="red">*</font>  </label> </td>
<td><input id="name" maxlength="45" name="passwd" type="password" /> </td>
</tr>





<tr>
<td align="right"><input name="Submit" size="10"  src="images/result.jp
g" type="submit" value="Submit"/> </td>

<td><input type="reset" value="Reset" /></td>


</tr>

</tbody></table>
</form>


<?php include "foot.html"?>

</body>
</html>
