<?php
// Check if session is not registered , redirect back to main page. Put this code in first line of web page.
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<TITLE>Somerset Hot Tubs Homepage</TITLE>
<META name="description" content="Somerset Hot Tubs, Hot Tubs and hot tub accessories, anything for hot tubs in the South West of England, Somerset, Devon, and Bristol">
<META name="keywords" content="Somerset Hot Tubs, somerset-hottubs, www.somerset-hottubs.co.uk, Hot Tubs, hot tub spa sales">
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/header.php'); ?>
</head>
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/layout.php'); ?>
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/menu.php'); ?>
<?php include($_SERVER[DOCUMENT_ROOT].'/layout/layout2.php'); ?>
<!-- CONTENT START -->
<DIV id=content>
<?php ob_start();
include($_SERVER[DOCUMENT_ROOT].'../layout/conectchem.php');

// Define $editrow 
$editrow=$_POST['editrow']; 

// To protect MySQL injection (more detail about MySQL injection)
$editrow = stripslashes($editrow); $editrow = mysql_real_escape_string($editrow);

$sql="SELECT * FROM $tbl_name WHERE Name='$editrow'";
$result=mysql_query($sql);

while($row = mysql_fetch_array($result))
  {
  echo "<H1>Update Details for " . $row['Name'] . "</H1><form name='" . $row['Name'] . "' method='post' action='savechemdetails.php'><input name='editname' type='hidden' id='editname' value='" . $row['Name'] . "'>";
	
  echo "<h2>Specifications</h2><table>";
    echo "<tr><td align='right'>Price (£) : </td><td><input name='editprice' type='text' id='editprice' size='40' value='" . $row['Price'] . "'></td><td align='right'>Trade Price (£) : </td><td><input name='edittradeprice' type='text' id='edittradeprice' size='40' value='" . $row['TradePrice'] . "'></td></tr></table>";
	
echo "<h2>Details</h2><table><tr><td align='right'>Info : </td><td colspan='3'><textarea name='editInfo' rows='6' cols='80' id='editInfo'>" .$row['Info'] . "</textarea></td></tr></table>";

  echo " <table><tr><td align='centre'><input type='submit' name='Submit' value='Save'></td></tr></table></form>";
   }
ob_end_flush();
?>

</DIV>
<!-- CONTENT END --> 
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/footer.php'); ?>