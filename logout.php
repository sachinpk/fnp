<?php
session_start();
session_destroy();
mysql_close($con);
header('Location:signin.php');
?>
