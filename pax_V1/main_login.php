<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<TITLE>Somerset Hot Tubs Homepage</TITLE>
<META name="description" content="Somerset Hot Tubs, Hot Tubs and hot tub accessories, anything for hot tubs in the South West of England, Somerset, Devon, and Bristol">
<META name="keywords" content="Somerset Hot Tubs, somerset-hottubs, www.somerset-hottubs.co.uk, Hot Tubs, hot tub spa sales">
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/header.php'); ?>
</head>
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/layout.php'); ?>
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/menu.php'); ?><?php include($_SERVER[DOCUMENT_ROOT].'/layout/layout2.php'); ?>
<!-- CONTENT START -->
<DIV id=content>

<H1>Site Admin</H1>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table> 
   
</DIV>
<!-- CONTENT END --> 
<?php include($_SERVER[DOCUMENT_ROOT].'../layout/footer.php'); ?>