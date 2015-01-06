<html><head><body>
<?php include "headphp.html" ?>

<br><br><h2><u><b>Hypertext Preprocessor (PHP)</u></b></h5><br>
 <p><img class="align-left" alt="" src="images/phpfun.jpg" height="500" width="500"/><br><br>


<font color="red">
</h2>
<h5><u><b>Created in 1994 by Rasmus Lerdorf</b></u></font></h5></p><br><br>
<h5 class="tw_bullet">HISTROY</h5>
	<h5><font color="BLACK">
PHP as it's known today is actually the successor to a product named PHP/FI. Created in 1994 by Rasmus Lerdorf, the very first incarnation of PHP was a simple set of Common Gateway Interface (CGI) binaries written in the C programming language. Originally used for tracking visits to his online resume, he named the suite of scripts "Personal Home Page Tools," more frequently referenced as "PHP Tools." Over time, more functionality was desired, and Rasmus rewrote PHP Tools. <BR>
</font></h5></p><br><br>




<h5 class="tw_bullet">SYNTAX</h5>
	<h5><font color="BLACK">
<?php
$html = "<!DOCTYPE html>

<title>PHP Test</title>
<?php
 echo 'Hello World';
?>";

echo htmlentities($html);
?>
<BR>
</font></h5></p><br><br>

	<h5><font color="BLACK">
<?php
$html1 = "The PHP interpreter only executes PHP code within its delimiters. Anything outside its delimiters is not processed by PHP (although non-PHP text is still subject to control structures described in PHP code) . The most common delimiters are <?php to open and ?> to close PHP sections.  and </script> delimiters are also available, as are the shortened forms <? or <?=  (which is used to echo back a string or variable) and ?>  as well as ASP-style short forms <%  or <%= and %>. While short delimiters are used, they make script files less portable as support for them can be disabled in the PHP configuration, and so they are discouraged.  The purpose of all these delimiters is to separate PHP code from non-PHP code, including HTML.

The first form of delimiters, <?php and ?>, in XHTML and other XML documents, creates correctly formed XML 'processing instructions'. This means that the resulting mixture of PHP code and other markup in the server-side file is itself well-formed XML.";

echo htmlentities($html1);
?>
<BR>
</font></h5></p><br><br>


<h5 class="tw_bullet">FUNCTIONS</h5>
	<h5><font color="BLACK">
<?php
$html = "PHP has hundreds of base functions and thousands more via extensions. These functions are well documented on the PHP site; however, the built-in library has a wide variety of naming conventions and inconsistencies.  PHP currently has no functions for thread programming, although it does support multi process programming on POSIX systems.


In PHP 5.2 and earlier, functions are not first-class functions and can only be referenced by their name, directly or dynamically by a variable containing the name of the function";



echo htmlentities($html);
?><br><br>
 <p><img class="align-left" alt="" src="images/phpfunctn.gif" height="500" width="500"/><br><br>
<BR>
</font></h5></p><br><br>
<h5 class="tw_bullet">PHP STORE</h5>

<a href="phpstore.php"><img src="images/phpstore.jpg" width="130" height="130" >



<?php include "foot.html"?>

</body>
</html>
