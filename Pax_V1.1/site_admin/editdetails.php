<?php
// Check if session is not registered , redirect back to main page. Put this code in first line of web page.
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<!DOCTYPE HTML> 
<html>
<head>
<TITLE>Somerset Hot Tubs Homepage</TITLE>
<META name="description" content="Somerset Hot Tubs, Hot Tubs and hot tub accessories, anything for hot tubs in the South West of England, Somerset, Devon, and Bristol">
<META name="keywords" content="Somerset Hot Tubs, somerset-hottubs, www.somerset-hottubs.co.uk, Hot Tubs, hot tub spa sales">
<?php include('../layout/header.php'); ?>
</head>
<?php include('../layout/layout.php'); include($_SERVER[DOCUMENT_ROOT].'../layout/menu_admin.php'); include($_SERVER[DOCUMENT_ROOT].'../layout/layout_no_sidebar.php'); ?>
<!-- CONTENT START -->
<DIV id=content>
<?php ob_start();
include('../layout/conect.php');
echo "<h1>Site Admin</h1>";
// Define $editrow 
$editrow=$_POST['editrow']; 
echo "<div><form name='uploadimage' method='post' action='http://www.somerset-hottubs.co.uk/upload_image.php'><input name='editname' type='hidden' id='editname' value='" . $editrow . "'><input type='submit' name='Submit' value='Upload New Image'></form></div>";			
echo "<div class='clear'></div>";
// To protect MySQL injection (more detail about MySQL injection)
$editrow = stripslashes($editrow); $editrow = mysql_real_escape_string($editrow);

$sql2="SELECT * FROM images WHERE page_name='$editrow' ORDER BY thumb_name DESC ";
$result2=mysql_query($sql2);

while($row2 = mysql_fetch_array($result2))
  
echo "<div style='width:140px; height:125px; text-align:center; float:left; padding:2px; margin:3px; border:1px solid #666; text-align:center;'>
<img SRC='http://www.somerset-hottubs.co.uk/assets/images/upload_pic/".$row2 ['thumb_name']."'><form name='deleteimage' method='post' action='filedelete.php'><input name='deleteimage' type='hidden' id='deleteimage' value='" .$row2 ['image_name']. "'><input name='deletethumb' type='hidden' id='deletethumb' value='" .$row2 ['thumb_name']. "'><input type='submit' name='Submit' value='Delete Image'></form></div>";
	echo "<div class='clear'></div>";	

$sql="SELECT * FROM $tbl_name WHERE Name='$editrow'";
$result=mysql_query($sql);

while($row = mysql_fetch_array($result))
  {
  echo "<H1>Update Details for " . $row['Name'] . "</H1><form name='" . $row['Name'] . "' method='post' action='savedetails.php'><input name='editname' type='hidden' id='editname' value='" . $row['Name'] . "'>";
	
  echo "<h2>Specifications</h2><table>";
    echo "<tr><td align='right'>Price (£) : </td><td><input name='editprice' type='text' id='editprice' size='40' value='" . $row['Price'] . "'></td><td align='right'>Trade Price (£) : </td><td><input name='edittradeprice' type='text' id='edittradeprice' size='40' value='" . $row['TradePrice'] . "'></td></tr>";
	    echo "<tr><td align='right'>Price RRP(£) : </td><td><input name='editpriceother' type='text' id='editpriceother' size='40' value='" . $row['PriceOther'] . "'></td><td align='right'>&nbsp;</td><td>&nbsp;</td></tr>";
	echo "<tr><td align='right'>Seats : </td><td><input name='editseats' type='text' id='editseats' size='40' value='" . $row['Seats'] . "'></td><td align='right'>Pump : </td><td><input name='editpump' type='text' id='editpump' size='40' value='" . $row['Pump'] . "'></td></tr>";
	echo "<tr><td align='right'>Blower : </td><td><input name='editBlower' type='text' id='editBlower' size='40' value='" . $row['Blower'] . "'></td><td></td><td></td></tr>";
	echo "<tr><td align='right'>Dimensions : </td><td><input name='editdimensions' type='text' id='editdimensions' size='40' value='" . $row['Dimensions'] . "'></td><td align='right'>Capacity : </td><td><input name='editcapacity' type='text' id='editcapacity' size='40' value='" . $row['Capacity'] . "'></td></tr>";
	echo "<tr><td align='right'>Heater : </td><td><input name='editheater' type='text' id='editheater' size='40' value='" . $row['Heater'] . "'></td><td align='right'>Jets : </td><td><input name='editjets' type='text' id='editjets' size='40' value='" . $row['Jets'] . "'></td></tr>";
	echo "<tr><td align='right'>Power : </td><td><input name='editpower' type='text' id='editpower' size='40' value='" . $row['Power'] . "'></td><td align='right'>Controls : </td><td><input name='editcontrols' type='text' id='editcontrols' size='40' value='" . $row['Controls'] . "'></td></tr>";
	echo "<tr><td align='right'>Weight Empty : </td><td><input name='editWeightEmpty' type='text' id='editWeightEmpty' size='40' value='" . $row['WeightEmpty'] . "'></td><td align='right'>Weight Full : </td><td><input name='editWeightFull' type='text' id='editWeightFull' size='40' value='" . $row['WeightFull'] . "'></td></tr>";
	echo "<tr><td align='right'>Cabinet : </td><td><input name='editCabinet' type='text' id='editCabinet' size='40' value='" . $row['Cabinet'] . "'></td><td align='right'>Base : </td><td><input name='editBase' type='text' id='editBase' size='40' value='" . $row['Base'] . "'></td></tr>";
	echo "<tr><td align='right'>Cover : </td><td><input name='editCover' type='text' id='editCover' size='40' value='" . $row['Cover'] . "'></td><td align='right'>Insulation : </td><td><input name='editInsulation' type='text' id='editInsulation' size='40' value='" . $row['Insulation'] . "'></td></tr>";
	echo "<tr><td align='right'>Lighting : </td><td><input name='editLighting' type='text' id='editLighting' size='40' value='" . $row['Lighting'] . "'></td><td align='right'>Filter : </td><td><input name='editFilter' type='text' id='editFilter' size='40' value='" . $row['Filter'] . "'></td></tr>";
	echo "<tr><td align='right'>Ozone : </td><td><input name='editOzone' type='text' id='editOzone' size='40' value='" . $row['Ozone'] . "'></td><td align='right'>Stereo : </td><td><input name='editStereo' type='text' id='editStereo' size='40' value='" . $row['Stereo'] . "'></td></tr>";
	echo "<tr><td align='right'>Extra1 : </td><td><input name='editExtra1' type='text' id='editExtra1' size='40' value='" . $row['Extra1'] . "'></td><td align='right'>Extra2 : </td><td><input name='editExtra2' type='text' id='editExtra2' size='40' value='" . $row['Extra2'] . "'></td></tr>";
	echo "<tr><td align='right'>Extra3 : </td><td><input name='editExtra3' type='text' id='editExtra3' size='40' value='" . $row['Extra3'] . "'></td><td align='right'>Extra4 : </td><td><input name='editExtra4' type='text' id='editExtra4' size='40' value='" . $row['Extra4'] . "'></td></tr>";
	echo "<tr><td align='right'>Extra5 : </td><td><input name='editExtra5' type='text' id='editExtra5' size='40' value='" . $row['Extra5'] . "'></td><td align='right'>Extra6 : </td><td><input name='editExtra6' type='text' id='editExtra6' size='40' value='" . $row['Extra6'] . "'></td></tr>";
	echo "<tr><td align='right'>Manufactured : </td><td><input name='editManf' type='text' id='editManf' size='40' value='" . $row['Manf'] . "'></td><td></td><td></td></tr></table>";
	
	
	echo "<h2>Include Files</h2><table><tr><td align='right'>Include file (top of page) : </td><td><select name='editIncludeBefore' id='editIncludeBefore'><option value='" . $row['IncludeBefore'] . "'>" . $row['IncludeBefore'] . "</option><option value='spa_n_a_box_top'>Spa N A Box Top Section</option><option value='vita_top'>Vita Top Section</option><option value=''>Remove Include File</option></select></td>";
    echo "<td align='right'>Images : </td><td><select name='editImages' id='editImages'><option value='" . $row['Images'] . "'>" . $row['Images'] . "</option><option value='YES'>YES</option><option value=''>NO</option></select></td>";
	    echo "<td align='right'>Colour Include : </td><td><select name='editColourInclude' id='editColourInclude'><option value='" . $row['ColourInclude'] . "'>" . $row['ColourInclude'] . "</option><option value='vita_spa_colours'>Vita Colours</option><option value=''>Remove Colours</option></select></td></tr><tr>";
	    echo "<td align='right'>Include After : </td><td><select name='editIncludeAfter' id='editIncludeAfter'><option value='" . $row['IncludeAfter'] . "'>" . $row['IncludeAfter'] . "</option><option value='airispa'>AiriSpa Video</option><option value='snappy_spa'>Snappy Spa Video</option><option value='spa_n_a_box_bottom'>Spa N A Box Bottom section</option><option value=''>Remove Include File</option></select></td>";
    echo "<td align='right'>Warranty Include : </td><td><select name='editWarrantyInclude' id='editWarrantyInclude'><option value='" . $row['WarrantyInclude'] . "'>" . $row['WarrantyInclude'] . "</option><option value='euro_warranty'>Euro Warranty</option><option value='mmx_warranty'>MMX Warranty</option><option value='ocean_warranty'>Ocean Warranty</option><option value='ocean_warranty_coral'>Ocean Warranty - Coral</option><option value='premium_warranty'>Premium Warranty</option><option value='vita_300_warranty'>Vita 300 Warranty</option><option value='vita_700_warranty'>Vita 700 Warranty</option><option value=' '>Remove Warranty</option></select></td><td></td><td></td></tr></table>";

	
	echo "<h2>Details</h2><table><tr><td align='right'>Detail Text : </td><td colspan='3'><textarea name='editDetailTxt' rows='6' cols='80' id='editDetailTxt'>" .$row['DetailTxt'] . "</textarea></td></tr>";
		echo "<tr><td align='right'>Seating Text : </td><td colspan='3'><textarea name='editSeatingTxt' rows='2' cols='80' id='editSeatingTxt'>" .$row['SeatingTxt'] . "</textarea></td></tr>";
	echo "<tr><td align='right'>Feature Text : </td><td colspan='3'><textarea name='editFeatureTxt' rows='2' cols='80' id='editFeatureTxt'>" .$row['FeatureTxt'] . "</textarea></td></tr>";	
			echo "<tr><td align='right'>Heating Text : </td><td colspan='3'><textarea name='editHeatingTxt' rows='2' cols='80' id='editHeatingTxt'>" .$row['HeatingTxt'] . "</textarea></td></tr>";
			echo "<tr><td align='right'>Construction Text : </td><td colspan='3'><textarea name='editConstructionTxt' rows='2' cols='80' id='editConstructionTxt'>" .$row['ConstructionTxt'] . "</textarea></td></tr>";	
	echo "<tr><td align='right'>Power Text : </td><td colspan='3'><textarea name='editPowerTxt' rows='2' cols='80' id='editPowerTxt'>" .$row['PowerTxt'] . "</textarea></td></tr>";	
	echo "<tr><td align='right'>Filter Text : </td><td colspan='3'><textarea name='editFilterTxt' rows='2' cols='80' id='editFilterTxt'>" .$row['FilterTxt'] . "</textarea></td></tr>";	
	echo "<tr><td align='right'>Control Text : </td><td colspan='3'><textarea name='editControlTxt' rows='2' cols='80' id='editControlTxt'>" .$row['ControlTxt'] . "</textarea></td></tr>";	
	echo "<tr><td align='right'>Jets Text : </td><td colspan='3'><textarea name='editJetsTxt' rows='2' cols='80' id='editJetsTxt'>" .$row['JetsTxt'] . "</textarea></td></tr>";		
	echo "<tr><td align='right'>Lighting Text : </td><td colspan='3'><textarea name='editLightingTxt' rows='2' cols='80' id='editLightingTxt'>" .$row['LightingTxt'] . "</textarea></td></tr></table>";

  echo " <table><tr><td align='centre'><input type='submit' name='Submit' value='Save'></td></tr></table></form>";

   }
ob_end_flush();
?>
</div>
<!-- CONTENT END --> 
<?php include('../layout/footer.php'); ?>