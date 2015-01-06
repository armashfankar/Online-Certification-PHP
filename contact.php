<html><head>

<script language="javascript" >
function fun()
{
	
	var name1=document.forms.frm.name1.value;
	var email=document.forms.frm.email.value;
	


	var website=document.forms.frm.website.value;
	var subject=document.forms.frm.subject.value;


	var message1=document.forms.frm.message1.value;


	
	
	if(name1=="")
	{
		alert("Enter your User Name ");
		return false;
	}


	if(email=="")
	{
		alert("Enter  email address ");
		return false;
	}


	if(website=="")
	{
		alert("Please enter website name");
		return false;
	}
	if(subject=="")
	{
		alert("Enter Email Subject");
		return false;
	}




	if(message1=="")
	{
		alert("Enter enter message");
		return false;
	}

}
</script>




<body>
<?php include "headcon.html"?>







<br> 
            <h4 class="tw_bullet">Get in touch.</h4>

        

                <p>
            Thank You For visiting Our Website,For further information and details please Conact us :)
		& submit the required details below.(site owner:Hajee Saima) 
                </p>

                <form method="post" action="cont.php" onSubmit="return fun()" name="frm" id="contactform">

                    
                    <p>Send me a message</p>
                    <table>
		<br><br>
                    <tr><td>
                    Name</td>
			</tr><font color="red">Name </font>
                    <input name="name1" type="text" id="name1" value="" />
              

               
                    <label><font color="red">Email </font> <span class="required">*</span></label>
                    <input name="email" type="text" id="email" value="" />
                

                    <label><font color="red">Website </font></label>
                    <input name="website" type="text" id="website" value="" />
         

              
                    <label><font color="red">Subject </font></label>
                    <input name="subject" type="text" id="subject"  value="" />
            

              	<br>
                    <label><br><font color="red">Message </font><span class="required">*</span></label><br>
                    <textarea name="message1" rows="15" cols="40"  id="message" ></textarea><br /><br />
              

  		<input type="submit"  value="Submit" class="button">
         			<input type="reset" value="Reset" class="button">
					

                </form>









            <aside>
<br><br>
<br><br>
                    <h4 class="tw_bullet">Contact Information</h4>


                    <p><font color="red"> Anjuman-I-Islam's, Kalsekar Technical Campus, School of Engineering & Technology, Plot # 2 & 3, Near Thane naka,Khandagaon, New Panvel, Navi Mumbai </font></p>

              
                    <p>
                    <font color="red">Phone:</font><font color="black">+91 - 22 - 27481247 </font> <br />
                    <font color="red">Email:  </font><font color="black">infoclassroom73@gmail.com</font> 
                    </p>

<br><br>
                     <h4 class="tw_bullet">Follow Us</h4>

                    <ul class="link-list social">
                        <li class="facebook"><h5><font color="blue">Facebook</font></li>
			<a href="http://www.facebook.com"> <img src="images/fb.png"  height="80" width="80">

			
                        <li class="googleplus"><font color="red"><h5>Google+</font></li>
                      <a href="http://www.google.com"><img src="images/g+" height="80" width="80">
                    </ul>

            </aside>



<?php include "foot.html"?>

</body>
</html>
