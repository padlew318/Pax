<?php 
$host="shareddb1c.hosting.stackcp.net"; // Host name 
$username="web80-paxplace"; // Mysql username 
$password="Tank369sHag69"; // Mysql password 
$db_name="web80-paxplace"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB"); 
?>