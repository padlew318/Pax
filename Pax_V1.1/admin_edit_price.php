<?php 
include('../conect.php');
$fromDate = $_POST['fromDate'];
$toDate = $_POST['toDate'];
$price = $_POST['price'];
$id = $_POST['id'];
$sql="UPDATE prices SET fromDate='$fromDate', toDate='$toDate', price='$price' WHERE id='$id'";
$result=mysql_query($sql);
header("location:login_success.php"); 
exit();
?>