
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
<title>Pax Place Gallery</title>
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
 <h2>Photographs of other local places</h2>            
  <p>Click image for bigger photographs.</p>

<?php include('conect.php');


$sql="SELECT * FROM images WHERE imgGroup='Other' ORDER BY sortOrder ";
$result2=mysql_query($sql);
while($row2 = mysql_fetch_array($result2))
  { if ($row2['thumb_name'] == "") {
        echo " "; }
else {
        echo "<div class='gallery'><a href='images/gallery/".$row2 ['image_name']."' rel='lightbox[".$row2 ['imgGroup']."]' title='" .$row2 ['image_title']. "''><img src='images/gallery/".$row2 ['thumb_name']."'></a></div>";
	  }}
		echo "<div class='clear'></div>"; ?><!--</a><p><i>&quot;" .$row2 ['image_title']. "&quot;</i></p>-->
</div></div> <!-- end #content -->
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
