<?php 
include_once($_SERVER[DOCUMENT_ROOT].'admin_update_timestamp.php');
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$tbl_name="message_box"; // Table name
// Define $editrow 
$delete=$_POST['delete']; 
mysql_query("DELETE FROM message_box WHERE id='$delete'") or die(mysql_error());
header("location:login_success.php"); 
exit();
?>