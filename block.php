<?php
session_start();
$s=$_REQUEST['spot'];
include("project connection.php");
$select=mysql_query("select * from gm where spot='$s'");
$arr=mysql_fetch_array($select);
mysql_query("insert into blocked(vehicleno,from,to)values('".$_POST['vehicleno']."','".$_POST['from']."','".$_POST['to']."')");
$a=$arr['blocked']+'1';
$b=$arr['free']-'1';
$update=mysql_query("update gm SET blocked='$a',free='$b' where spot='$s'");
header("Location:blocked.php ?spot=<?php echo $s?>");
mysql_close($con);
?>