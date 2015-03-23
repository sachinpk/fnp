<?php
session_start();
$_SESSION['name']=$_POST['name'];
include("project connection.php");
$sel=mysql_query("select max(no) from feedback");
$s=mysql_fetch_array($sel);
$b=$s[0];
$a='1';
$b=$b+$a;
$insert=mysql_query("insert into feedback (no,name,subject,email,description)values('$b','".$_POST['name']."','".$_POST['sub']."','".$_POST['email']."','".$_POST['det']."')");
header("Location:feedback1.php");
mysql_close($con);
?> 
