<html><head><body>
<?php include "headeg.html" ?>

<br><br><br>
 <h2><u>DATA TYPES IN C PROGRAMMING LANGUAGE</u></h2>
<h5><font color="BLACK">

   <br> * C data types are defined as the data storage format that a variable can store a data to perform a specific operation.
   <br> * Data types are used to define a variable before to use in a program.
   <br>* Size of variable, constant and array are determined by data types.


<br><br>
<table border="1">
<font color="blue">
<tr><td><center><font color="red">SR.NO</td><td><center><font color="red">TYPES</td><td><center><font color="red">DATA TYPES</td>
</tr>

<tr><td><center>001</td><td><center>Basic data types</td><td><center>int, char, float, double</td>
</tr>
<tr><td><center>002</td><td><center>Enumeration data type</td><td><center>enum</td></tr>
<tr><td><center>003</td><td><center>Derived data type</td><td><center>pointer, array, structure, union</td></tr>
<tr><td><center>004</td><td><center>Void data type</td><td><center>Void</td></tr>
</font>
</table>

<br>

<h5 class="tw_bullet">Integer data type:</h5>
<font color="BLACK"><p>This data type allows a variable to store numeric values. int  keyword is used to refer integer data type. The storage size of int data type is 2 or 4 or 8 byte. It varies depend upon the processor in the CPU that we use.   If we are using 16 bit processor, 2 byte(16 bit) of memory will be allocated for int data type. Like wise, 4 byte(32 bit) of memory for  32 bit processor and 8 byte(64 bit) of memory for  64 bit processor is allocated for int.<br><br>

int(2 byte) can store values from -32,768 to +32,767<br><br>
int(4 byte) can store values from -2,147,483,648 to +2,147,483,647.<br><br>

If you want to use the integer value that crosses the above limit, you can go for long int and long long int for which the limits are very high.
<br><br>
Note:
           You can’t store decimal values using int data type. If you use decimal values, those would be truncated and you will get only whole number.
float data type can be used to store decimal values in a variable</font></p>
<br><br>

<h5 class="tw_bullet">Character data type:</h5>
<font color="BLACK"><p>
This data type allows a variable to store only one character. storage size of char data type is 1. We can store only one character using char data type. char keyword is used to refer character data type.<br><br>
For example, ‘A’ can be stored using char datatype.<br><br>
You can’t store more than one character using char data type. Please refer strings topic to know how to store more than one characters in a variable.</font></p>


<br><br>

<h5 class="tw_bullet">Floating point data type:</h5>
<font color="BLACK"><p>

Floating point data type consists of 2 types. They are, float and double.<BR>
<B><FONT COLOR="RED">float:</FONT></B>
<BR>
Float data type allows a variable to store decimal values. storage size of float data type is 4. This also varies depend upon the processor in the CPU. We can use upto 6 digits after decimal using float data type.
For example, 10.456789 can be stored in a variable using float data type.<BR>
<B><FONT COLOR="RED">double:</FONT></B>
<BR>
Double data type is also same as float data type which allows upto 10 digits after decimal. and the range is from 1E–37 to 1E+37.





<br><br>

<h5 class="tw_bullet">Enumeration data type:</h5>
<font color="BLACK"><p>
<br>
  Enumeration data type consists of named integer constants as a list. It start with 0(zero) by default and value is incremented by 1 for the sequential identifiers in the list.2. Enumeration data type:
<br>
Enum syntax in C:
<br>
enum identifier [optional{ enumerator-list }]
<br><br>
Enum example :
<br>
enum month { Jan, Feb, Mar }; or<br>
/* Jan, Feb and Mar variables will be assigned to 0, 1 and 2 respectively by default */<br>
enum month { Jan = 1, Feb, Mar };<br>
/* Feb and Mar variables will be assigned to 2 and 3 respectively by default */<br>
enum month { Jan = 20, Feb, Mar };<br>
/* Jan, Feb and Mar variables will be assigned to 20, 21 and 22 respectively by default */
<br>
The above enum functionality can also be implemented by “#define” preprocessor directive as given below. Above enum example is same as given below.
<br>
#define Jan 20;<br>
#define Feb 21;<br>
#define Mar 22;<br></FONT></P>
<br><br><h4><font color="red">C – enum example program:</font></h4>
<p>
<font color="purple">
#include <stdio.h><br>
 <br>
int main()<br>
{<br>
   enum MONTH { Jan = 0, Feb, Mar };<br>
 <br>
   enum MONTH month = Mar;<br>
 <br>
   if(month == 0)<br>
      printf("Value of Jan");<br>
   else if(month == 1)<br>
      printf("Month is Feb");<br>
   if(month == 2)<br>
      printf("Month is Mar");<br>
}<br></font>

<h4><font color="red">Output:</font></h4>
<p>Month is March</p>



<br><br>

<h5 class="tw_bullet"> Derived data type:</h5>
<font color="BLACK"><p>

Array, pointer, structure and union are called derived data type. To know more about derived data types, please visit C – Array topic.



</font>
</p>


<br><br>

<h5 class="tw_bullet">Void data type:</h5>
<font color="BLACK"><p>
           Void is an empty data type that has no value. This can be used in functions and pointers. Please visit C – Function topic to know how to use void data type in function with simple call by value and call by reference example programs.</font></p>

</p>

<?php include "foot.html"?>

</body>
</html>
