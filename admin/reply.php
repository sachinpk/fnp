<html>
<head></head>
<body>
<body>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
$message0="";
if(isset($_POST['finishbutton']))
{
$sub=$_POST['sub'];
$email=$_POST['email'];
$det=$_POST['det'];
include("project connection.php");
foreach($_POST as $field => $value)
{
if($value=="")
 {
  $blankArray[$field]=$value;
 }
}
if(@sizeof($blankArray)>0)
{
 $message0="* Please fill all the fields";
}
if($message0=="")
{
header("Location:admin_home.php");
}
}

?>

<li><a href="../logout.php">Logout</a>|<a href="admin_home.php">Home</a></li>
<h1><div align="center"><b>Replay</b></div></h1>
<form action="replay.php" method="post"> 
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