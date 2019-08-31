<?php
// Check if session is not registered , redirect back to main page. Put this code in first line of web page.
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Pax Place Site Admin</title>

</head>

	<body>

		<div id="wrapper">

<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<div id="content">
<h1>Dates and Prices Admin</h1>
<div  class="blueBox">

<?php include('conect.php'); ?>

<table><tr><th>Dates</th><th>Dates</th><th>Price</th></tr>
<?php
$result = mysql_query ('SELECT * FROM prices ORDER BY id') or die ('Error: '.mysql_error ());
while($row = mysql_fetch_array($result))
{       

 echo "<tr><td><form name='edit_message' method='post' action='admin_edit_price.php'><input name='id' type='hidden' value='" .$row ['id']. "'><input name='fromDate' type='text' size='20' value='" . $row['fromDate'] . "'></td><td><input name='toDate' type='text' size='20' value='" . $row['toDate'] . "'></td><td><input name='price' type='text' size='20' value='" . $row['price'] . "'></td><td>";
echo "<input  type='submit' name='Submit' value='Save'></form></td><td>";
 echo "<form name='delete' method='post' action='admin_delete_price.php'><input name='delete' type='hidden' value='" .$row ['id']. "'><input type='submit' name='Submit' value='Delete'></form></td></tr>"; 
}
?> 
</table>
<p></p>
  <table><tr><td><form id="add_new_price" name="add_new_price" method="post" action="admin_new_price.php"><input name="fromDate" type="text" id="fromDate" size="20"></td>
  <td><input name="toDate" type="text" id="toDate" size="20"></td><td>
<input name="price" type="text" id="price" size="20"></td><td>
<input type="submit" name="Submit" value="Save"></td><td>
<input type="reset" name="Submit2" value="Reset"></form></td>
</tr></table>

</div>
</div> <!-- end #content -->
<?php include('includes/footer2.php'); ?>
</div> <!-- End #wrapper -->
</body>
</html>