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




<div  class="blueBox">
<H1>Site Admin</H1>
<div class='editpage'><h2>Mail</h2><form name='mail' method='post' action='http://webmail.hosting.heartinternet.co.uk/webmail-new.cgi?mid=1630950;username=enquiries@paxplace.co.uk;password=Cw^WfF4Ux;interface=advanced'><input type='submit' name='Submit' value='Edit'></form></div>


<div class='editpage'><h2>Gallery</h2><form name='gallery' method='post' action='admin_gallery.php'><input type='submit' name='Submit' value='Edit'></form></div>

<div class='editpage'>
  <h2>Dates and Prices</h2><form name='fees' method='post' action='admin_prices.php'><input type='submit' name='Submit' value='Edit'></form></div> 

</div>
</div> <!-- end #content -->
<div id="footer">
<?php include ('randomimage.php'); ?>
<div style="padding-top:10px;"><table border="0" cellspacing="5" cellpadding="4" align="center">
  <tr>
    <td border="0">	<div class="footer_image"><img src="/<?php echo $random1; ?>" width="200px" alt="image alt" /></div></td>
    <td border="0">	<div class="footer_image"><img src="/<?php echo $random2; ?>" width="200px" alt="image alt" /></div></td>
    <td border="0">	<div class="footer_image"><img src="/<?php echo $random3; ?>" width="200px" alt="image alt" /></div></td>
    <td border="0">	<div class="footer_image"><img src="/<?php echo $random4; ?>" width="200px" alt="image alt" /></div></td>
  </tr>
</table>
</div>
<div class="clear"></div>
<?php include('includes/footer2.php'); ?>
</div> <!-- End #wrapper -->
</body>
</html>