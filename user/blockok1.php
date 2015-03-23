<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
// session_register($spot1);
// $spot=$_SESSION['spot1'];
$spot=$_POST['spot'];
// echo $spot;
include("project connection.php");
$from=$_POST['from'];
$accpin=$_POST['accpin'];
$accsl=$_POST['accsl'];
echo $from;

$to=$_POST['to'];
$vehno=$_POST['vehicleno'];
$user=$_SESSION['user'];
mysql_query("insert into blocked (spot,fromtime,totime,vehno,user,parked) values('$spot','$from','$to','$vehno','$user',FALSE)",$con);
$s=mysql_query("select * from gm where spot='$spot'",$con);
$s1=mysql_fetch_array($s,MYSQL_ASSOC);
$newblocked=$s1['blocked']+1;
$newfree=$s1['free']-1;
$town=$s1['town'];
mysql_query("update gm set blocked='$newblocked',free='$newfree' where spot='$spot'",$con);
header("Location:user_home.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<!-- <form id="form1" name="form1" method="post" action=""> -->

</form>
</body>
</html>
