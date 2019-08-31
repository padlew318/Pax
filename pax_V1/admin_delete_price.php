<?php 
include('../conect.php');
$delete=$_POST['delete']; 
mysql_query("DELETE FROM prices WHERE id='$delete'") or die(mysql_error());
header("location:login_success.php"); 
exit();
?>