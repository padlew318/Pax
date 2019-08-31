
<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Pax Place - Sport and Leisure</title>
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
         <div class="blueBox"> 
<h2>Sport and Leisure  </h2>
<div onclick="window.location.href='sport.php';" class='blueBoxSub'>
  <h3>Sport</h3>
<p>Sporting activities in the local area.</p>
</div>
  <div onclick="window.location.href='leisure.php';" class='blueBoxSub'>
<h3>Leisure</h3>
<p>Leisure activities in the local area.</p>
</div>


</div>

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