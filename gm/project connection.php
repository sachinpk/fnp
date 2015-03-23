<?php
$con=mysql_connect('localhost','root','passme');
if(!$con)
{
die("SERVER NOT FOUND".mysql_error());
}
mysql_select_db('fnp',$con)or die("DATABASE NOT FOUND".mysql_error());

?>
