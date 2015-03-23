<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("project connection.php");
$sel=mysql_query("select distinct(town) from gm");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body >
<title>FindNPark</title>
<form action="search.php" method="post">  

  <table width="298" border="0" align="center">
    <tr>
      <td width="168"><a  href="feedback.php">Feedback</a>&nbsp;</td>
     
    </tr>
    <tr>
      <td><a href="signin.php">Sign In</a>&nbsp;</td>
      </tr>
    <tr>
      <td><a href="signup.php">Sign Up</a>&nbsp;</td>
      </tr>
  </table>
</li>
<h1><div align="center"><b>FindNPark-Way to park!</b>
  <label></label>
  </div></h1>
<div align="center">
  <label><b>Select town
  <select name="town">
  <?php
  while($town=mysql_fetch_array($sel))
  {
  $town1=$town['town'];?>
  <option value="<?php echo $town1;?>" ><?php echo $town1;?></option>
  <?php
  }
  ?>
  </select>
  </b>
  </label>
  
  <input type="submit" value="Find Parking" name="Submit"/>
<div id="wrapper">
	<div id="header">
					
  </div>
		
<div id="menu">
<br>
<br><br><br>
			<ul>
				<li class="first"><a href="about-us/index.html">About</a></li>
				<li><a href="faq/index.html">faq</a></li>
				<li><a href="jobs/index.html">jobs</a></li>
				<li><a href="testimonials/index.html">Testimonials</a></li>
				<li><a href="terms-and-conditions/index.html">Terms</a></li>
				<li><a href="privacy/index.html">privacy</a></li>
				<li> <class="last"><a href="contact-us/index.html">Contact</a></li>
<li>
</form>
			</ul></br>
</br></br></br>
		
<div align="bottom">&copy; 2012 FindNpark - All rights reserved</div></br></br></br></br>
</form>
</body>
</html> 
