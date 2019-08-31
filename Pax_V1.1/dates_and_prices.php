
<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Pax Place Dates available and Prices</title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7646257-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

	<body>

		<div id="wrapper">

<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<div id="content">
<div  class="blueBox">
<h2>Dates and Prices</h2>

<table><tr><th>Dates</th><th>Price for 7 nights (£)</th></tr>
<?php include('conect.php'); ?>
<?php  
$result = mysql_query("SELECT * FROM prices") or die ('Error: '.mysql_error ());
while($row = mysql_fetch_array($result))
{       
 echo "<tr><td>" .$row ['fromDate']. " to " . $row['toDate'] . "</td><td>" . $row['price'] . "</td></tr>";
}
?> 
</table>

</div>
</div> <!-- end #content -->
<div id="footer">

<div style="padding-top:10px;"><table border="0" cellspacing="5" cellpadding="4" align="center">
  <tr>
    <td border="0"><img src="images/gallery/thumb_1341741707.jpg" width="216" ></td>
    <td  border="0"><img src="images/gallery/thumb_1341741726.jpg" width="216" ></td>
    <td border="0"><img src="images/gallery/thumb_1341683670.jpg" width="216" ></td>
    <td border="0"><img src="images/gallery/thumb_1341742409.jpg" width="216" ></td>
  </tr>
</table>
</div>
<div class="clear"></div>
<?php include('includes/footer.php'); ?>
</div> <!-- End #wrapper -->
</body>
</html>