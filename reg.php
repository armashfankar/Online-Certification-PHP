<html><head><body>
<?php include "headreg.html"
?>
<script language="javascript" >
function fun()
{
	
	var username=document.forms.frm.username.value;
	var passwd=document.forms.frm.passwd.value;
	


	var gender=document.forms.frm.gender.value;
	var email=document.forms.frm.email.value;


	var mob=document.forms.frm.mob.value;


	
	
	if(username=="")
	{
		alert("Enter your User Name ");
		return false;
	}


	if(passwd=="")
	{
		alert("Enter  Password ");
		return false;
	}





	if(gender=="")
	{
		alert("Please Select Gender");
		return false;
	}
	if(email=="")
	{
		alert("Enter Email Address");
		return false;
	}




	if(mob=="")
	{
		alert("Enter Mobile Number");
		return false;
	}

}
</script>
<center>

<br><br>


<form  method="post" action="conn.php" onSubmit="return fun()" name= frm>



<table border="0">

<tbody>

<tr>
<td><label for="name"> <h5 class="tw_bullet">Desired Username<font color="red">*</font>  </label> </td>
<td><input id="name" maxlength="45" name="username" type="text" /> </td>
</tr>

<tr>
<td><label for="name"> <h5 class="tw_bullet">Desired password<font color="red">*</font>  </label> </td>
<td><input id="name" maxlength="45" name="passwd" type="password" /> </td>
</tr>







<td><label for="name"> <h5 class="tw_bullet">Gender<font color="red">*</font> </label> </td>
<td><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female





<tr>
<td><label for="name"><h5 class="tw_bullet">Email<font color="red">*</font>  </label> </td>
<td><input id="name" maxlength="45" name="email" type="text" /> </td>
</tr>

<tr>
<td><label for="name"><h5 class="tw_bullet">Qualification<font color="red"></font>  </label> </td>
<td><input id="name" maxlength="45" name="qua" type="text" /> </td>
</tr>

<tr>
<td><label for="name"><h5 class="tw_bullet">Mobile NO<font color="red"></font>  </label> </td>
<td><input id="name" maxlength="45" name="mob" type="text" /> </td>
</tr>






<tr>	

<td>
<input type="checkbox" checked="true" name="accept_privacy" value="1">
</td>
<td><font color="red">I have read and agree to Institutes<a target="_blank" href="privacy.php" linkindex="1"><font color="red"> privacy statement</a> and <a target="_blank" href="terms_of_use.php" linkindex="2"><font color="red">terms and conditions.</a>
</td>
</tr>




<tr>
<td align="right"><input name="Submit" size="10" type="submit" value="Submit"/> </td>

<td><input type="reset" value="Reset" /></td>


</tr>

</tbody></table>
</form>


<?php include "foot.html"?>

</body>
</html>
