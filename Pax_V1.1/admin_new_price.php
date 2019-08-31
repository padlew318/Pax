<?php 
include('../conect.php');
$fromDate = $_POST['fromDate'];
$toDate = $_POST['toDate'];
$price = $_POST['price'];
$sql="INSERT INTO prices(fromDate, toDate, price)VALUES('$fromDate', '$toDate', '$price')";
$result=mysql_query($sql);
header("location:login_success.php"); 
exit();
?>