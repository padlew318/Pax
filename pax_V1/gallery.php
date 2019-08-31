<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href="css/lightbox.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<title>Gallery</title>
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


<h2>Photographs</h2> 
           
  <p>Click image for more photographs.</p>

<div onclick="window.location.href='gallery_pax.php';" class='gallery_choice'>
<h3>Pax Place</h3>
<img src='images/gallery/thumb_1341265096.jpg' width="224" >
</div>

<div onclick="window.location.href='gallery_portloe.php';" class='gallery_choice'>
<h3>Portloe</h3>
<img src='images/gallery/thumb_1341601737.jpg' width="224" >
</div>
<div onclick="window.location.href='gallery_other.php';" class='gallery_choice'>
<h3>Other places</h3>
<img src='images/gallery/thumb_1341742409.jpg' width="224" >
</div>
<div class='clear'></div>
</div></div><!-- end #content -->
<div id="footer">
<?php include "randomimage.php"; ?>
<div style="padding-top:10px;"><!--<table border="0" cellspacing="5" cellpadding="4" align="center">
  <tr>
    <td border="0">	<div class="footer_image"><img src="/<?php echo $random1; ?>" width="200px" alt="image alt" /></div></td>
    <td border="0">	<div class="footer_image"><img src="/<?php echo $random2; ?>" width="200px" alt="image alt" /></div></td>
    <td border="0">	<div class="footer_image"><img src="/<?php echo $random3; ?>" width="200px" alt="image alt" /></div></td>
    <td border="0">	<div class="footer_image"><img src="/<?php echo $random4; ?>" width="200px" alt="image alt" /></div></td>
  </tr>
</table>-->
</div>
<div class="clear"></div>
<?php include('includes/footer.php'); ?>

		</div> <!-- End #wrapper -->

	</body>

</html>
