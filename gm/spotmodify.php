

<?php
session_start();
include("project connection.php");
$id=$_GET['gmid'];
$r=mysql_query("select * from gm where gmid='$id'");
$ar=mysql_fetch_array($r);

if(isset($_POST['update']))
{
$newtotal=$_POST['total'];
$newparked=$_POST['parked'];
$newblocked=$_POST['blocked'];
$newfree=$_POST['free'];
mysql_query("update gm set total='$newtotal',blocked='$newblocked',parked='$newparked',free='$newfree' where gmid='$id'");

header("Location:spotdet.php?gmid=$id");
}

?>
<html>
<form method="post" action="">
<li><a href="../logout.php">Logout</a>|<a href="gm_home.php?gmid=<?php echo $id;?>">Home</a></li>
<h1>
  <div align="center"><b>Spot Updation </b></div>
</h1>
<h1><div align="center"><b></b>
  <table width="42%" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td width="47%" bgcolor="#999999"><strong>Town</strong></td>
      <td width="53%" bgcolor="#FFFF99"><strong><?php echo $ar['town'];?>&nbsp;</strong></td>
    </tr>
    <tr>
      <td bgcolor="#999999"><strong>Spot</strong></td>
      <td bgcolor="#FFFF99"><strong><?php echo $ar['spot'];?>&nbsp;</strong></td>
    </tr>
    <tr>
      <td bgcolor="#999999"><strong>Total</strong></td>
      <td bgcolor="#FFFF99"><strong>
        <label>
        <input name="total" type="text" id="total" value="<?php echo $ar['total'];?>">
          </label>
      </strong></td>
    </tr>
    <tr>
      <td bgcolor="#999999"><strong>Parked</strong></td>
      <td bgcolor="#FFFF99"><strong>
        <label>
        <input name="parked" type="text" id="parked" value="<?php echo $ar['parked'];?>">
          </label>
      </strong></td>
    </tr>
    <tr>
      <td bgcolor="#999999"><strong>Blocked</strong></td>
      <td bgcolor="#FFFF99"><strong>
        <label>
        <input name="blocked" type="text" id="blocked" value="<?php echo $ar['blocked'];?>">
          </label>
      </strong></td>
    </tr>
    <tr>
      <td bgcolor="#999999"><strong>Free</strong></td>
      <td bgcolor="#FFFF99"><strong>
        <label>
        <input name="free" type="text" id="free" value="<?php echo $ar['free'];?>">
          </label>
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input name="update" type="submit" id="update" value="update">
          <input name="reset" type="submit" id="reset" value="reset">
          </div>
      </label></td>
      </tr>
  </table>
</div></h1>
</form>
<li>&copy; 2012 FindNpark - All rights reserved.
</body> 
<?php
mysql_close($con);
?>

</html> 

