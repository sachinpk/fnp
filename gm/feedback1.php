<html>
<head></head>
<body>
<body>
<?php
session_start();
$message0="";
if(isset($_POST['finishbutton']))
{
$name=$_POST['name'];
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
$sel=mysql_query("select max(no) from feedback");
$s=mysql_fetch_array($sel);
$b=$s[0];
$a='1';
$b=$b+$a;
$insert=mysql_query("insert into feedback (no,name,subject,email,description)values('$b','".$_POST['name']."','".$_POST['sub']."','".$_POST['email']."','".$_POST['det']."')");
header("Location:feedback1.php");
}
}

?>
<li><a href="../logout.php">Logout</a>|<a href="gm_home.php?gmid=<?php echo $id;?>">Home</a></li>
<h1><div align="center"><b>FEEDBACK</b></div></h1>
<h1><div align="center"><b>Feedback Send Successfully!</b></div></h1>
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