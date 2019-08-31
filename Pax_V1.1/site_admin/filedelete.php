<?php 
include($_SERVER[DOCUMENT_ROOT].'../layout/conect.php');
// Define $editrow 
$deletethumb=$_POST['deletethumb']; 
$deleteimage=$_POST['deleteimage']; 
mysql_query("DELETE FROM images WHERE image_name='$deleteimage'") or die(mysql_error());
unlink("../assets/images/upload_pic/" . $deletethumb);
unlink("../assets/images/upload_pic/" . $deleteimage);
header("location:login_success.php"); 
exit();
?>