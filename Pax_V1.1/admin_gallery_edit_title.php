<?php 
include('conect.php');
// Define $editrow 
$image_title=$_POST['image_title']; 
$image_id=$_POST['image_id']; 
$image_group=$_POST['image_group']; 
$image_sortorder=$_POST['image_sortorder']; 
mysql_query("UPDATE images SET image_title='$image_title', sortOrder='$image_sortorder', imgGroup='$image_group' WHERE image_id='$image_id'") or die(mysql_error());
header("location:admin_gallery.php"); 
exit();
?>