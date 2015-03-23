<html>
<head></head>
<body>
<body>
<?php
include("project connection.php");
session_start();
$message0="";
if(isset($_POST['finishbutton']))
{
$name='kaki'//$_POST['name'];
$sub='sasi'//$_POST['sub'];
$email='ss@ss.nn'//$_POST['email'];
$det='dddddddddddddddddddd'//$_POST['det'];

$sql = "INSERT INTO `feedback`( `name`, `subject`, `email`) VALUES ('$name','$sub','$email','$det')";
mysql_query($sql);
// header("Location:feedback1.php");

}

?>

<li><a href="index.php">Home</a></li>
<h1><div align="center"><b>FEEDBACK</b></div></h1>
<form action="feedback.php" method="post"> 
<p>&nbsp;</p>
<p>&nbsp;</p>
<table align="center">
<tr><b>
<?php
echo $message0;					
?>
</b>
</td>
</tr>    
</table>               
<table align="center" cellpadding="8" cellspacing="8">
<tr>
<td><div align="center"><b>Name</b></div></td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td><div align="center"><b>Subject</b></div></td>
<td><input type="text" name="sub" /></td>
</tr>
<tr>
<td><div align="center"><b>Email</b></div></td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td><div align="center"><b>Description</b></div></td>
<td><textarea rows="5" columns="5" name="det"></textarea></td> 
</tr>
</table>
<table align="center">
<tr>
<td><input type="submit" value="Send" name="finishbutton"/></td>
<td><input type="reset" value="Clear" name="reset"/></td>
</tr>
</table>
</form>
<li>&copy; 2012 FindNpark - All rights reserved.
</body> 
</html> 