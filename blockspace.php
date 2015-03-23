
<?php 
session_start();
$s=$_GET['spot'];
$_SESSION['spot1']=$s;
$msg=$_GET['msg'];
$s1=$_SESSION['spot1'];
?>

<html>
<head></head>
<body>
<li><a href="feedback.php">Feedback</a>|<a href="signin.php">Sign In</a>|<a href="index.php">Home</a></li>
<h1><div align="center"><b>Block A Space</b></div></h1>
<form action="blockok.php?spot=<?php echo $_GET['spot'];?>" method="post"> 
<p>&nbsp;</p>
<p><div align="center"><?php echo $msg;?>&nbsp;</div></p>

<table align="center" cellpadding="8" cellspacing="8">
<tr>
<td><div align="center"><b>From:</b></div></td>
<td ><select name="from" >
<option value="0">12:00 am</option>    <option value="1">12:30 am</option>    <option value="2">01:00 am</option>    <option value="3">01:30 am</option>    <option value="4">02:00 am</option>    <option value="5">02:30 am</option>    <option value="6">03:00 am</option>    <option value="7">03:30 am</option>    <option value="8">04:00 am</option>    <option value="9">04:30 am</option>    <option value="10">05:00 am</option>    <option value="11">05:30 am</option>    <option value="12">06:00 am</option>    <option value="13">06:30 am</option>    <option value="14">07:00 am</option>    <option value="15">07:30 am</option>    <option value="16">08:00 am</option>    <option value="17">08:30 am</option>    <option value="18">09:00 am</option>    <option value="19">09:30 am</option>    <option value="20">10:00 am</option>    <option value="21">10:30 am</option>    <option value="22">11:00 am</option>    <option value="23">11:30 am</option>    <option value="24">12:00 pm</option>    <option value="25">12:30 pm</option>    <option value="26">01:00 pm</option>    <option value="27">01:30 pm</option>    <option value="28">02:00 pm</option>    <option value="29">02:30 pm</option>    <option value="30">03:00 pm</option>    <option value="31">03:30 pm</option>    <option value="32">04:00 pm</option>    <option value="33">04:30 pm</option>    <option value="34">05:00 pm</option>    <option value="35">05:30 pm</option>    <option value="36">06:00 pm</option>    <option value="37">06:30 pm</option>    <option value="38">07:00 pm</option>    <option value="39">07:30 pm</option>    <option value="40">08:00 pm</option>    <option value="41">08:30 pm</option>    <option value="42">09:00 pm</option>    <option value="43">09:30 pm</option>    <option value="44">10:00 pm</option>    <option value="45">10:30 pm</option>    <option value="46">11:00 pm</option>    <option value="47">11:30 pm</option>        </select>  </div> 
</tr>
<tr>
<td><div align="center"><b>To:</b></div></td>
<td ><select name="to" >
<option value="1">12:30 am</option>    <option value="2">01:00 am</option>    <option value="3">01:30 am</option>    <option value="4">02:00 am</option>    <option value="5">02:30 am</option>    <option value="6">03:00 am</option>    <option value="7">03:30 am</option>    <option value="8">04:00 am</option>    <option value="9">04:30 am</option>    <option value="10">05:00 am</option>    <option value="11">05:30 am</option>    <option value="12">06:00 am</option>    <option value="13">06:30 am</option>    <option value="14">07:00 am</option>    <option value="15">07:30 am</option>    <option value="16">08:00 am</option>    <option value="17">08:30 am</option>    <option value="18">09:00 am</option>    <option value="19">09:30 am</option>    <option value="20">10:00 am</option>    <option value="21">10:30 am</option>    <option value="22">11:00 am</option>    <option value="23">11:30 am</option>    <option value="24">12:00 pm</option>    <option value="25">12:30 pm</option>    <option value="26">01:00 pm</option>    <option value="27">01:30 pm</option>    <option value="28">02:00 pm</option>    <option value="29">02:30 pm</option>    <option value="30">03:00 pm</option>    <option value="31">03:30 pm</option>    <option value="32">04:00 pm</option>    <option value="33">04:30 pm</option>    <option value="34">05:00 pm</option>    <option value="35">05:30 pm</option>    <option value="36">06:00 pm</option>    <option value="37">06:30 pm</option>    <option value="38">07:00 pm</option>    <option value="39">07:30 pm</option>    <option value="40">08:00 pm</option>    <option value="41">08:30 pm</option>    <option value="42">09:00 pm</option>    <option value="43">09:30 pm</option>    <option value="44">10:00 pm</option>    <option value="45">10:30 pm</option>    <option value="46">11:00 pm</option>    <option value="47">11:30 pm</option>        </select>  </div>  
</tr>
<tr>
<td><div align="center"><b>Time Req.To Reach:</b></div></td>
<td> <select name="tr" >
<option value="1">5 min</option>	<option value="2">10 min</option>	<option value="3">15 min</option>
<option value="4">20 min</option>	<option value="5">25 min</option>	<option value="6">30 min</option>
<option value="7">35 min</option>	<option value="8">40 min</option>	<option value="9">45 min</option>
<option value="10">50 min</option>	<option value="11">55 min</option>	<option value="12">1 hr</option> 
<option value="13">1 hr 5 min</option>	<option value="14">1 hr 10 min</option>	<option value="15">1 hr 15 min</option>
<option value="16">1 hr 20 min</option>	<option value="17">1 hr 25 min</option>	<option value="18">1 hr 30 min</option>
<option value="19">1 hr 35 min</option>	<option value="20">1 hr 40 min</option>	<option value="21">1 hr 45 min</option>
<option value="22">1 hr 50 min</option>	<option value="23">1 hr 55 min</option>	<option value="24">2 hr</option> 
</tr>
<tr>
<td><input type="submit" value="Calculate Price" name="submit"/>
</tr>
</table>
</form>
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
</html> 


