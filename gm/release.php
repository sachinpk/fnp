<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("project connection.php");
$id=$_REQUEST['no'];
$location=mysql_query("SELECT spot from blocked where no='$id'");
$spot=mysql_fetch_array($location);
$spot=$spot['spot'];
mysql_query("UPDATE `gm` SET `parked`=parked-1,`blocked`=blocked-1,`free`=free+1 WHERE `spot`='$spot'");
mysql_query("DELETE from blocked where no='$id'");
header("Location:check.php");
?>