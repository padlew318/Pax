
<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Pax Place</title>
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
<h1>Site Map</h1>
<ul>
	<li><a href="index.php">Home</a></li>
    <li><a href="enquiries.php">Enquiries & Prices</a></li>
    <li><a href="gallery.php">Photos of Pax</a>
    	<ul>
        <li><a href="gallery_pax.php">Pax Gallery</a></li>
        <li><a href="gallery_portloe.php">Portloe Gallery</a></li>
        </ul>
    </li>
	<li><a href="local.php">Around & about</a>
		<ul>
        <li><a href="eating_out.php">Eating Out</a></li>
        <li><a href="transport.php">Transport</a></li>
        <li><a href="sport_and_Leisure.php">Sport & Leisure</a>
  			<ul>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="leisure.php">Leisure</a> </li>
        	</ul></li>            
        </ul></li>
	
    <li><a href="cookies.php">Cookies</a></li>
</ul>
</div> <!-- end #content -->
<div id="footer">
<?php include "randomimage.php"; ?>
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
<?php include('includes/footer.php'); ?>

		</div> <!-- End #wrapper -->

	</body>

</html>
