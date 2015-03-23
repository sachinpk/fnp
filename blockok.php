
<?php
include("project connection.php");
$price="";
$message0="";
$spot=$_GET['spot'];
$from=$_POST['from'];
$to=$_POST['to'];
$tr=$_POST['tr'];
$select1=mysql_query("select * from mapping where no='$to'");
$fromtime1=mysql_fetch_array($select1,MYSQL_ASSOC);
$fromtime=$fromtime1['tm'];
$select2=mysql_query("select * from mapping where no='$from'");
$totime1=mysql_fetch_array($select2,MYSQL_ASSOC);
$totime=$totime1['tm'];
$price=($to-$from)*$tr*'100';
?>
<html>
<head></head>
<body>
<form action="blockok1.php" method="post">
<li><a href="feedback.php">Feedback</a>|<a href="signin.php">Sign In</a>|<a href="index.php">Home</a></li>
<div align="center"><b>Projected Price Rs.
<?php
echo $price." ".$message0;					
?>
</b></div>
<table align="center" cellpadding="8" cellspacing="8">
<tr>
<td><div align="center"><b>Vehicle No:</b></div></td>
<td><input type="text" name="vehicleno" /></td>
</tr>
<tr>
<td><div align="center"><b>Account Pin No:</b></div></td>
<td><input type="text" name="accpin" /></td>
</tr>
<tr>
<td><div align="center"><b>Account Sl No:</b></div></td>
<td><input type="text" name="accsl" /></td>

</tr>
<tr>
<td><div align="center"><input type="submit" value="Block Space" name="finishbutton"  /></div></td>
<td><input type="reset" value="Clear" name="reset"/></td>
</tr>
</table>
<input name="from" type="hidden" value="<?php echo $fromtime;?>">
<input name="to" type="hidden" value="<?php echo $totime;?>">
<input name="tr" type="hidden" value="<?php echo $tr;?>">
<input name="price" type="hidden" value="<?php echo $price;?>">


</form>
<div>&copy; 2012 FindNpark - All rights reserved.</div>
</body>      
</html> 


