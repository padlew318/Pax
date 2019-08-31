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
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/menu.php'); ?><?php include($_SERVER[DOCUMENT_ROOT].'/layout/layout2.php'); ?>
<!-- CONTENT START -->
<DIV id=content>

<H1>Site Admin</H1>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs ORDER BY Price");
while($row = mysql_fetch_array($result))
  {
  echo "<div class=clear><h2>";
  echo $row['Name'];
  echo "</h2><FONT COLOR='RED'><strong>£";
  echo $row['Price'];
  echo "</strong></FONT>";
  echo $row['TubRange'];
  echo $row['Name'];
  echo " </div>";
  }
?>
   
</DIV>
<!-- CONTENT END --> 
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/footer.php'); ?>
 