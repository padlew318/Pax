<?php 
include_once($_SERVER[DOCUMENT_ROOT].'admin_update_timestamp.php');
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$tbl_name="message_box"; // Table name
$title = $_POST['title'];
$text = $_POST['text'];
$sql="INSERT INTO $tbl_name(title, bodyText)VALUES('$title', '$text')";
$result=mysql_query($sql);
header("location:login_success.php"); 
exit();
?>