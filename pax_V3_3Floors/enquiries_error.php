
<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Pax Place Enquiries</title>
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
 <h2>Dates and Prices 2017</h2>
   <div class="home_image"><a href="gallery_pax.php"><img src="images/footer/thumb_1341616018.jpg" width="224"></a>
    <p><i>"View from sitting room window"</i></p></div>


     <table width="70%"><tr><th>Dates</th><th>Price for 7 nights (£)</th></tr>
<?php include('conect.php'); ?>
<?php  
$result = mysql_query("SELECT * FROM prices WHERE deleted='0' ORDER BY id ") or die ('Error: '.mysql_error ());
while($row = mysql_fetch_array($result))
{       
 echo "<tr><td>" .$row ['fromDate']. " to " . $row['toDate'] . "</td><td align='center'>£ " . $row['price'] . ".00</td></tr>";
}
?> 
</table>

<p>Arrival/Departure:  Friday</p>
<h2>Enquiries</h2>
<p>Complete enquiry form below or telephone   01386 840272</p>
<p> Full details of booking terms and conditions will be sent with booking form .</p>   
 <div class="message_box"><p>Please fill in all the boxes</p></div>       
        <form action="enquiries_mailform.php" method="post">
          <table bgcolor="#f6f6f6" cellspacing="0" cellpadding="1">
              <tr>
                <td><strong>Name *</strong></td>
                <td><input type="text" name="name" value=""></td>
              </tr>
              <tr>
                <td><strong>Address line 1 *</strong></td>
                <td><input type="text" name="add1" value=""></td>
              </tr>
              <tr>
                <td><strong>Address line 2</strong></td>
                <td><input type="text" name="add2" value=""></td>
              </tr>
              <tr>
                <td><strong>Town *</strong></td>
                <td><input type="text" name="town" value=""></td>
              </tr>
              <tr>
                <td><strong>County *</strong></td>
                <td><input type="text" name="county" value=""></td>
              </tr>
              <tr>
                <td><strong>Postcode *</strong></td>
                <td><input type="text" name="postcode" value=""></td>
              </tr>
              <tr>
                <td><strong>Telephone (Landline)</strong></td>
                <td><input type="text" name="teleph" value=""></td>
              </tr>
              <tr>
                <td><strong>Telephone (Mobile)</strong></td>
                <td><input type="text" name="telepm" value=""></td>
              </tr>
              <tr>
                <td><strong>Dates *</strong></td>
                <td>
                  <p>From Friday
                    <input type="text" name="fromDate" value=""> 
                  2017                 </p>
                  <p> To Friday
                    <input type="text" name="toDate" value=""> 
                    2017</p></td>
              </tr>
                            <tr>
                <td><strong>Email *</strong></td>
                <td><input type="text" name="email" value=""></td>
              </tr>
              
                            <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr><td>&nbsp;</td>
                <td>
                  <input class="green_button" type="submit" name="Submit" value="Submit" /> <input Class="orange_button"type="reset" name="Submit2" value="Reset" />
                </td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><small>Use of this form is restricted to genuine enquiries about renting this property. Unsolicited commercial marketing is strictly prohibited.</small></td>
              </tr>
          </table>
        </form>
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
