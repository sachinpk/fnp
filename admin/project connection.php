<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect('localhost','root','passme');
if(!$con)
{
die("SERVER NOT FOUND".mysql_error());
}
mysql_select_db('fnp',$con)or die("DATABASE NOT FOUND".mysql_error());
$result = mysql_query("SELECT * FROM `mail` WHERE `to`='admin'");
$undread=mysql_query("SELECT count(`read`) AS unread FROM `mail` WHERE `to`='admin' AND `read`=0");
$count=mysql_fetch_array($undread);
$unreadcount=$count['unread'];
?>
