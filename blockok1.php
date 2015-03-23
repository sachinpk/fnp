<?php
@session_register($spot1);
@$spot=$_SESSION['spot1'];
include("project connection.php");
$from=$_POST['from'];
$accpin=$_POST['accpin'];
$accsl=$_POST['accsl'];
$to=$_POST['to'];
$vehno=$_POST['vehicleno'];
if($vehno==null or $accpin==null or $accsl==null)
{
header("Location:blockspace.php?msg=***Please fill all the fields***&spot=<?php echo $spot;?> ");
}
else
{
mysql_query("insert into blocked values('$spot','$from','$to','$vehno')");
$s=mysql_query("select * from gm where spot='$spot'",$con);
$s1=mysql_fetch_array($s,MYSQL_ASSOC);
$newblocked=$s1['blocked']+1;
$newfree=$s1['free']-1;
$town=$s1['town'];
mysql_query("update gm set blocked='$newblocked',free='$newfree' where spot='$spot'");
header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

</form>
</body>
</html>
