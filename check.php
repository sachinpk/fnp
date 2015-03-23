<html>
<link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />
<?php
$s=$_GET['spot'];
include("project connection.php");
$result=mysql_query("select * from blocked where spot='$s'");
?>
<li><a href="feedback.php">Feedback</a>|<a href="signin.php">Sign In</a>|<a href="index.php">Home</a></li>
<h1><?php echo $s;?></h1>
<table align="center" cellpadding="8" cellspacing="8">
        <thead>
          <tr>
            <th>Vehicle No.</th>
            <th>From</th>
            <th>To</th>
          </tr>
<?php
while($arr=mysql_fetch_array($result))
{
?>
<tr>
<th><?php echo $arr['vehno'];?></th>
<th><?php echo $arr['fromtime'];?></th>
<th><?php echo $arr['totime'];?></th>
<?php
}
?>
</tr>
</table>
<body>
</body>
</html>