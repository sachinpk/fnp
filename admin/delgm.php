<?php
include("project connection.php");
$id=$_REQUEST['gmid'];
mysql_query("DELETE from gm where gmid='$id'");
mysql_query("DELETE from register where username='$id'");
header("Location:gmdet.php");
?>