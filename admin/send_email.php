<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("project connection.php");
session_start();
if(isset($_POST['finishbutton']))
{
$to=$_POST['email_to'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mysql_query("INSERT INTO `mail`(`from`, `to`, `subject`, `message`) VALUES ('admin','$to','$subject','$message')");

header("Location:admin.php");
}


?>