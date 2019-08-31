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
      <h2>Photographs of Pax Place</h2>
      <p>Click image for bigger photographs.</p>
      <?php include('conect.php');
	  
	  
$sql="SELECT * FROM images WHERE imgGroup='Pax' ORDER BY sortOrder ";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
  { if ($row['thumb_name'] == "") {
        echo " "; }
else {
        echo "<div class='gallery'><a href='images/gallery/".$row ['image_name']."' rel='lightbox[Pax]' title='" .$row ['image_title']. "'><img width='220px' src='images/gallery/".$row ['thumb_name']."'></a></div>";
	  }}?>
<div class='clear'></div>
    </div>
  </div>
  <!-- end #content -->
  <div id="footer">
    <div style="padding-top:10px;">
    </div>
    <div class="clear"></div>
    <?php include('includes/footer.php'); ?>
</div>
</div><!-- End #wrapper -->

</body>
</html>
