<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("project connection.php");
$id=$_REQUEST['no'];
mysql_query("DELETE from feedback where no='$id'");
header("Location:recfed.php");
?>