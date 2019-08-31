<?php 
include('conect.php');
// Define $editrow 
$deletethumb=$_POST['deletethumb']; 
$deleteimage=$_POST['deleteimage']; 
mysql_query("DELETE FROM images WHERE image_name='$deleteimage'") or die(mysql_error());
unlink("images/gallery/" . $deletethumb);
unlink("images/galleryc/" . $deleteimage);
header("location:admin_gallery.php"); 
exit();
?>