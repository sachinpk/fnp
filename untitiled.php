<?php
session_start();
$username=$_POST['uname'];
include("project connection.php");
$result=mysql_query("select gmid from gm where gmid='".$_POST['uname']."'");
$select=mysql_query("select type from register where username='".$_POST['uname']."' and password='".$_POST['pass']."'");
$array=mysql_fetch_array($select);
$type=$array['type'];
if($type=='admin')
{
header("Location:admin/admin_home.php");
}
else if($type=='user')
{
session_start();
$_SESSION["user"] = $username;

header("Location:user/user_home.php?uname=$username");
}
else if($type=='gm')
{
session_start();
$_SESSION["user"] = $username;
header("Location:gm/gm_home.php?gmid=$username");
}
else
{
header("Location:signin1.php");
}
mysql_close($con);
?>