<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("project connection.php");

if (isset($_REQUEST['query'])) {

	$query = $_REQUEST['query'];
	
	$sql = mysql_query ("SELECT * FROM register WHERE email LIKE '%{$query}%'");
	$array = array();
	
	while ($row = mysql_fetch_assoc($sql)) {
		$array[] = $row['email'];
	}
	
	echo json_encode ($array); //Return the JSON Array

}

?>
