<?php
// Check if session is not registered , redirect back to main page. Put this code in first line of web page.
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Pax Place Site Admin</title>

</head>

	<body>

		<div id="wrapper">

<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<div id="content">
<h1>Gallery Admin</h1>
<!-- CONTENT START -->
<?php ob_start();
include('conect.php');
// Define $editrow 
$editrow="Gallery";
echo "<div class='blueBox'>"; 
echo "<div class=h2>Add new image</div>"; 
echo "<div><form name='uploadimage' method='post' action='upload_crop.php'><input name='editname' type='hidden' id='editname' value='" . $editrow . "'><input class='green_button' type='submit' name='Submit' value='Upload New Image'></form></div>";			
echo "</div>";
echo "<div class='clear'></div>";

echo "<div class='blueBox'>"; 
echo "<div class=h2>Gallery</div>";
// To protect MySQL injection (more detail about MySQL injection)
$editrow = stripslashes($editrow); $editrow = mysql_real_escape_string($editrow);

$sql2="SELECT * FROM images WHERE imgGroup=''";
$result2=mysql_query($sql2);

while($row2 = mysql_fetch_array($result2))
  
echo "<div class='admin_gallery'><img SRC='images/gallery/".$row2 ['thumb_name']."'><form name='update_image_title' method='post' action='admin_gallery_edit_title.php'><input name='image_title' type='text' size='30'value='" .$row2 ['image_title']. "'><input name='image_sortorder' type='text' size='3'value='" .$row2 ['sortOrder']. "'><select name='image_group'><option value='' selected='selected'> -- Please select -- </option><option value='Pax'>Pax</option><option value='Portloe'>Portloe</option><option value='Other'>Other</option></select><input name='image_id' type='hidden' value='" .$row2 ['image_id']. "'><input class='green_button' type='submit' name='Submit' value='Edit'></form><form name='deleteimage' method='post' action='filedelete.php'><input name='deleteimage' type='hidden' id='deleteimage' value='" .$row2 ['image_name']. "'><input name='deletethumb' type='hidden' id='deletethumb' value='" .$row2 ['thumb_name']. "'><input class='orange_button' type='submit' name='Submit' value='Delete Image'></form></div>";
	echo "<div class='clear'></div>";	
 echo "</div>";
echo "<div class='clear'></div>"; 

echo "<div class='blueBox'>"; 
echo "<div class=h2>Gallery</div>";
// To protect MySQL injection (more detail about MySQL injection)
$editrow = stripslashes($editrow); $editrow = mysql_real_escape_string($editrow);

$sql2="SELECT * FROM images WHERE imgGroup='Pax' ORDER BY sortOrder ";
$result2=mysql_query($sql2);

while($row2 = mysql_fetch_array($result2))
  
echo "<div class='admin_gallery'><img SRC='images/gallery/".$row2 ['thumb_name']."'><form name='update_image_title' method='post' action='admin_gallery_edit_title.php'><input name='image_title' type='text' size='30'value='" .$row2 ['image_title']. "'><input name='image_sortorder' type='text' size='3'value='" .$row2 ['sortOrder']. "'><select name='image_group'><option value='' selected='selected'> -- Please select -- </option><option value='Pax'>Pax</option><option value='Portloe'>Portloe</option><option value='Other'>Other</option></select><input name='image_id' type='hidden' value='" .$row2 ['image_id']. "'><input class='green_button' type='submit' name='Submit' value='Edit'></form><form name='deleteimage' method='post' action='filedelete.php'><input name='deleteimage' type='hidden' id='deleteimage' value='" .$row2 ['image_name']. "'><input name='deletethumb' type='hidden' id='deletethumb' value='" .$row2 ['thumb_name']. "'><input class='orange_button' type='submit' name='Submit' value='Delete Image'></form></div>";
	echo "<div class='clear'></div>";	
 echo "</div>";
echo "<div class='clear'></div>"; 

echo "<div class='blueBox'>"; 
echo "<div class=h2>Gallery</div>";
// To protect MySQL injection (more detail about MySQL injection)
$editrow = stripslashes($editrow); $editrow = mysql_real_escape_string($editrow);

$sql2="SELECT * FROM images WHERE imgGroup='Portloe' ORDER BY sortOrder ";
$result2=mysql_query($sql2);

while($row2 = mysql_fetch_array($result2))
  
echo "<div class='admin_gallery'><img SRC='images/gallery/".$row2 ['thumb_name']."'><form name='update_image_title' method='post' action='admin_gallery_edit_title.php'><input name='image_title' type='text' size='30'value='" .$row2 ['image_title']. "'><input name='image_sortorder' type='text' size='3'value='" .$row2 ['sortOrder']. "'><select name='image_group'><option value='' selected='selected'> -- Please select -- </option><option value='Pax'>Pax</option><option value='Portloe'>Portloe</option><option value='Other'>Other</option></select><input name='image_id' type='hidden' value='" .$row2 ['image_id']. "'><input class='green_button' type='submit' name='Submit' value='Edit'></form><form name='deleteimage' method='post' action='filedelete.php'><input name='deleteimage' type='hidden' id='deleteimage' value='" .$row2 ['image_name']. "'><input name='deletethumb' type='hidden' id='deletethumb' value='" .$row2 ['thumb_name']. "'><input class='orange_button' type='submit' name='Submit' value='Delete Image'></form></div>";
	echo "<div class='clear'></div>";	
 echo "</div>";
echo "<div class='clear'></div>"; 

echo "<div class='blueBox'>"; 
echo "<div class=h2>Gallery</div>";
// To protect MySQL injection (more detail about MySQL injection)
$editrow = stripslashes($editrow); $editrow = mysql_real_escape_string($editrow);

$sql2="SELECT * FROM images WHERE imgGroup='Other' ORDER BY sortOrder ";
$result2=mysql_query($sql2);

while($row2 = mysql_fetch_array($result2))
  
echo "<div class='admin_gallery'><img SRC='images/gallery/".$row2 ['thumb_name']."'><form name='update_image_title' method='post' action='admin_gallery_edit_title.php'><input name='image_title' type='text' size='30'value='" .$row2 ['image_title']. "'><input name='image_sortorder' type='text' size='3'value='" .$row2 ['sortOrder']. "'><select name='image_group'><option value='' selected='selected'> -- Please select -- </option><option value='Pax'>Pax</option><option value='Portloe'>Portloe</option><option value='Other'>Other</option></select><input name='image_id' type='hidden' value='" .$row2 ['image_id']. "'><input class='green_button' type='submit' name='Submit' value='Edit'></form><form name='deleteimage' method='post' action='filedelete.php'><input name='deleteimage' type='hidden' id='deleteimage' value='" .$row2 ['image_name']. "'><input name='deletethumb' type='hidden' id='deletethumb' value='" .$row2 ['thumb_name']. "'><input class='orange_button' type='submit' name='Submit' value='Delete Image'></form></div>";
	echo "<div class='clear'></div>";	
 echo "</div>";
echo "<div class='clear'></div>"; 

ob_end_flush();
?>
</div> <!-- end #content -->
<?php include('includes/footer2.php'); ?>
</div> <!-- End #wrapper -->
</body>
</html>