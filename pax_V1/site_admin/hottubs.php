<?php
// Check if session is not registered , redirect back to main page. Put this code in first line of web page.
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>
<!DOCTYPE HTML"> 
<html>
<head>
<TITLE>Somerset Hot Tubs Homepage</TITLE>
<META name="description" content="Somerset Hot Tubs, Hot Tubs and hot tub accessories, anything for hot tubs in the South West of England, Somerset, Devon, and Bristol">
<META name="keywords" content="Somerset Hot Tubs, somerset-hottubs, www.somerset-hottubs.co.uk, Hot Tubs, hot tub spa sales">
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/header.php'); ?>
</head>
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/layout.php'); ?>
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/menu_admin.php'); ?>
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/siteadminlayout2.php'); ?>
<!-- CONTENT START -->
<DIV id=content>

<H1>Site Admin</H1>

<div class="clear">
<h2>Aqua Spas</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='Aqua' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?></div>

<div class="clear"> <hr> </div>

<div class="clear">
<h1>Catalina</h1>
<h2>Catalina Swim Spas</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='Catalina Swim Spa' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?></div>

<div class="clear">
<h2>Classic Spas</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='Classic' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?></div>
 
 
<div class="clear">
<h2>World Series</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='World Series' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?>
</div> 
 
<div class="clear"> <hr> </div>
 
 <div class="clear">
<h2>Sunset Spas</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='Sunset' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?>
</div>  
<div class="clear">
<h2>CLP Spas</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='CLP' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?>
</div> 

 
<div class="clear">
<h2>Vita Spas</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='VITA' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?>
</div> 
<div class="clear"><h2>Vita Swim Spas</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='Vita Swim Spa' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?>
</div>

<div class="clear"><h2>Lifestyle Spas</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='Lifestyle Spas' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?>
</div>

<div class="clear">
<h2>Euro Spas</h2>
<?php
mysql_connect('localhost','web244-hot1195','TanKman33') or die(mysql_error()); 
mysql_select_db('web244-hot1195') or die(mysql_error()); 
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE TubRange='EURO' ORDER BY Name");
while($row = mysql_fetch_array($result))
  {
  echo "<div class='edittub'><form name='" . $row['Name'] . "' method='post' action='editdetails.php'>";
  echo "<input name='editrow' type='hidden' id='editrow' value='" . $row['Name'] . "'><input name='dummyname' type='text' id='dummyname' disabled='disabled' value='" . $row['Name'] . "'>";
  echo "<input type='submit' name='Submit' value='Edit'></form></div>";
  }
?>
</div>    

<div class="clear"></div></div>
<!-- CONTENT END --> 
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/footer.php'); ?>