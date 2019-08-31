<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$tbl_name="last_update"; // Table name
$date=date("d F Y"); //date time
$time=date("H:i"); //date time
$sql="INSERT INTO $tbl_name(timestamp, datestamp, comment)VALUES('$time', '$date', 'Website last updated')";
$result=mysql_query($sql);
?>