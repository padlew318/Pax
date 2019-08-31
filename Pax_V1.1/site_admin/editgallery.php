<?php
// Check if session is not registered , redirect back to main page. Put this code in first line of web page.
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<!DOCTYPE HTML> 
<html>
<head>
<TITLE>Somerset Hot Tubs Homepage</TITLE>
<META name="description" content="Somerset Hot Tubs, Hot Tubs and hot tub accessories, anything for hot tubs in the South West of England, Somerset, Devon, and Bristol">
<META name="keywords" content="Somerset Hot Tubs, somerset-hottubs, www.somerset-hottubs.co.uk, Hot Tubs, hot tub spa sales">
<?php include('../layout/header.php'); ?>
</head>
<?php include('../layout/layout.php'); include($_SERVER[DOCUMENT_ROOT].'../layout/menu_admin.php'); include($_SERVER[DOCUMENT_ROOT].'../layout/layout_no_sidebar.php'); ?>
<!-- CONTENT START -->
<DIV id=content>
<?php ob_start();
include('../conect.php');
echo "<h1>Site Admin</h1>";
// Define $editrow 
$editrow=$_POST['editrow']; 
echo "<div><form name='uploadimage' method='post' action='http://www.somerset-hottubs.co.uk/upload_image.php'><input name='editname' type='hidden' id='editname' value='" . $editrow . "'><input type='submit' name='Submit' value='Upload New Image'></form></div>";			
echo "<div class='clear'></div>";
// To protect MySQL injection (more detail about MySQL injection)
$editrow = stripslashes($editrow); $editrow = mysql_real_escape_string($editrow);

$sql2="SELECT * FROM images WHERE page_name='$editrow' ORDER BY thumb_name DESC ";
$result2=mysql_query($sql2);

while($row2 = mysql_fetch_array($result2))
  
echo "<div style='width:140px; height:125px; text-align:center; float:left; padding:2px; margin:3px; border:1px solid #666; text-align:center;'>
<img SRC='http://www.somerset-hottubs.co.uk/assets/images/upload_pic/".$row2 ['thumb_name']."'><form name='deleteimage' method='post' action='filedelete.php'><input name='deleteimage' type='hidden' id='deleteimage' value='" .$row2 ['image_name']. "'><input name='deletethumb' type='hidden' id='deletethumb' value='" .$row2 ['thumb_name']. "'><input type='submit' name='Submit' value='Delete Image'></form></div>";
	echo "<div class='clear'></div>";	
  

ob_end_flush();
?>
</div>
<!-- CONTENT END --> 
<?php include('../layout/footer.php'); ?>