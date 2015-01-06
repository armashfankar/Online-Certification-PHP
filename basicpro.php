<html><head><body>
<?php include "headeg.html" ?>


<br><br><br>
 <h2><u>C-Basic Programs</u></h2>

<br><Br>
<h5 class="tw_bullet">"HELO WORLD! PROGRAME"</h5>
<font color="purple"><p>
/* C Basics example Program */
 
#include <stdio.h><br>
 
int main()<br>
{<br>
     /* Our first simple C basic program */<br>
     printf("Hello World! ");<br>
     return 0;<br>
}</font></p>
<br><br><p>
<font color="red">
OUTPUT:
		Hello World!</font>
</p>




<br><Br>
<h5 class="tw_bullet">Steps to compile & execute a C program:</h5>
<font color="BLACK"><p>
<br><br>
<font color="red">Step1 </font>	Type the above C basic program in a text editor and save as “sample.c”.<br><br>
<font color="red">Step2</font> To compile this program, open the command prompt and goto the directory where you have saved this program and type “cc sample.c” or “gcc          
sample.c”.<br><br>
<font color="red">Step3 </font>	If there is no error in above program, executable file will be generated in the name of “a.out”.<br><br>
<font color="red">Step4 </font>	To run this executable file, type “./a.out” in command prompt.<br><br>
<font color="red">Step5 </font>	You will see the output as shown in the above basic program.</font></p>





<br><Br>
<h5 class="tw_bullet">C basic structure::</h5>
<font color="BLACK"><p>
<br><br>
#include <stdio.h>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;        /*  Link section */<br>
int total;               &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;        /*  Global declaration section */<br>
int sum (int, int);           &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   /*  Function declaration section */<br>
int main ()                   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   /* Main function */<br>
{      <br>
     printf ("This is main function \n");<br>
     total = sum (1, 1);    <br>                          
     printf ("Total = %d \n", total);<br>
     return 0;<br>
}<br>
int sum (int a, int b)<br>
{                              &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  /*  User defined function */<br>
     return a + b;              &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; /* definition section */<br>
}<br></font></p>
<font color="red">
OUTPUT:<BR>
	This is main function<BR>
Total = 2</font>
</p>

<br><br><br>

<table border="1">

<tbody>
<tr>
<td><center><h5 class="tw_bullet">SR.NO<center></td>
<td><center><h5 class="tw_bullet">COMMAND</center></td>
<td><h5 class="tw_bullet">DESCRIPTION</td>
</tr>



<tr>
<td><h5><center>01</td>
<td><h5><center><font color="red">#include<stdio.h></a></td>
<td><h5><center><font color="balck">This is a preprocessor command that includes standard input output header file(stdio.h) from the C library before compiling a C program</td>
</tr>




<tr>
<td><h5><center>02</td>
<td><h5><center><font color="red">int main()</a></td>
<td><h5><center><font color="balck">This is the main function from where execution of any C program begins</td>
</tr>




<tr>
<td><h5><center>03</td>
<td><h5><center><font color="red">printf(“Hello World! “);</a></td>
<td><h5><center><font color="balck">printf command prints the output onto the screen</td>
</tr>


<tr>
<td><h5><center>04</td>
<td><h5><center><font color="red">	return 0;</a></td>
<td><h5><center><font color="balck">	
This command terminates main function then returns 0</td>
</tr>
</TABLE>


<?php include "foot.html"?>

</body>
</html>
