<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect('localhost','root','passme');
if(!$con)
{
die("SERVER NOT FOUND".mysql_error());
}
mysql_select_db('fnp',$con)or die("DATABASE NOT FOUND".mysql_error());

?>
