<html>
<link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />
<?php
session_start();
include("project connection.php");
$result = mysql_query("select * from gm where town='".$_POST['town']."'");
?>
<li><a href="feedback.php">Feedback</a>|<a href="signin.php">Sign In</a>|<a href="index.php">Home</a></li>
<h1><div align="center"><b>Find A Space From:</b></div></h1>
<h1><div align="center"><b><?php echo $_POST['town'];?></b></div></h1>
<table align="center" cellpadding="8" cellspacing="8">
        <thead>
          <tr>
            <th>Spot</th>
            <th>Parked Spaces</th>
            <th>blocked Spaces</th>
            <th>Free Spaces</th>
            <th>Block A Space</th>
          </tr>
<?php
while($arr=mysql_fetch_array($result))
{
?>
<tr>
<th><?php echo $arr['spot'];?></th>
<th><?php echo $arr['parked'];?></th>
<th><?php echo $arr['blocked'];?>
<?php
if($arr['blocked']==0)
{
?>
</th>
<?php
}
else
{
?>
<a href="check.php?spot=<?php echo $arr['spot'];?>"/> Check</th>
<?php
}
?>
<th><?php echo $arr['free'];?></th>
<?php
if($arr['free']==0)
{
?>
<th>No free space!</th>
<?php
}
else
{
?>
<th><a href="blockspace.php?spot=<?php echo $arr['spot'];?> & msg=""">Block</a></th>
<?php
}
}
?>
</tr>
</table>
<b><div align="center">
<script type="text/javascript">
<!--
var currentTime = new Date()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
if (minutes < 10){
minutes = "0" + minutes
}
document.write(hours + ":" + minutes + " ")
if(hours > 11){
document.write("PM")
} else {
document.write("AM")
}
//-->
</script>
</div>
</b>
<div>&copy; 2012 FindNpark - All rights reserved.</div>
</body> 
<?php
mysql_close($con);
?>
</html> 

