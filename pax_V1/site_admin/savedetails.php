<?php
// Check if session is not registered , redirect back to main page. Put this code in first line of web page.
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>
<H1>Site Admin</H1>

<?php
include($_SERVER[DOCUMENT_ROOT].'../layout/conect.php');

// Define $editrow 
$editname=$_POST['editname']; 
$editprice=$_POST['editprice']; 
$editpriceother=$_POST['editpriceother']; 
$edittradeprice=$_POST['edittradeprice']; 
$editseats=$_POST['editseats']; 
$editpump=$_POST['editpump']; 
$editdimensions=$_POST['editdimensions'];
$editcapacity=$_POST['editcapacity'];
$editheater=$_POST['editheater'];
$editjets=$_POST['editjets'];
$editpower=$_POST['editpower'];
$editcontrols=$_POST['editcontrols'];
$editWeightEmpty=$_POST['editWeightEmpty'];
$editWeightFull=$_POST['editWeightFull']; 
$editCabinet=$_POST['editCabinet']; 
$editCover=$_POST['editCover']; 
$editLighting=$_POST['editLighting']; 
$editBase=$_POST['editBase']; $editColourInclude=$_POST['editColourInclude']; $editIncludeAfter=$_POST['editIncludeAfter'];
$editInsulation=$_POST['editInsulation']; 
$editLightingTxt=$_POST['editLightingTxt']; $editLightingTxt=str_replace("'", "",$editLightingTxt); 
$editDetailTxt=$_POST['editDetailTxt']; $editDetailTxt=str_replace("'", "",$editDetailTxt);
$editSeatingTxt=$_POST['editSeatingTxt']; $editSeatingTxt=str_replace("'", "",$editSeatingTxt);
$editHeatingTxt=$_POST['editHeatingTxt']; $editHeatingTxt=str_replace("'", "",$editHeatingTxt); 
$editOzone=$_POST['editOzone'];  $editStereo=$_POST['editStereo'];  $editFilter=$_POST['editFilter'];  
$editExtra1=$_POST['editExtra1'];   
$editExtra2=$_POST['editExtra2'];
$editExtra3=$_POST['editExtra3'];
$editExtra4=$_POST['editExtra4'];
$editExtra5=$_POST['editExtra5'];
$editExtra6=$_POST['editExtra6'];
$editManf=$_POST['editManf'];
$editBlower=$_POST['editBlower'];
$editJetsTxt=$_POST['editJetsTxt']; $editJetsTxt=str_replace("'", "",$editJetsTxt);
$editControlTxt=$_POST['editControlTxt']; $editControlTxt=str_replace("'", "",$editControlTxt);
$editFilterTxt=$_POST['editFilterTxt']; $editFilterTxt=str_replace("'", "",$editFilterTxt);
$editPowerTxt=$_POST['editPowerTxt']; $editPowerTxt=str_replace("'", "",$editPowerTxt);
$editConstructionTxt=$_POST['editConstructionTxt']; $editConstructionTxt=str_replace("'", "",$editConstructionTxt);
$editFeatureTxt=$_POST['editFeatureTxt']; $editFeatureTxt=str_replace("'", "",$editFeatureTxt);
$editIncludeBefore=$_POST['editIncludeBefore'];
$editWarrantyInclude=$_POST['editWarrantyInclude']; $editImages=$_POST['editImages'];

//echo $editrow;

// To protect MySQL injection (more detail about MySQL injection)
//$editrow = stripslashes($editrow);
//$editrow = mysql_real_escape_string($editrow);

mysql_query("UPDATE $tbl_name SET IncludeBefore='$editIncludeBefore', Price='$editprice', PriceOther='$editpriceother', Images='$editImages', TradePrice='$edittradeprice', Pump='$editpump', Blower='$editBlower', Seats='$editseats', Dimensions='$editdimensions', Capacity='$editcapacity', Heater='$editheater', Jets='$editjets', Power='$editpower', Controls='$editcontrols', WeightEmpty='$editWeightEmpty', WeightFull='$editWeightFull', Cabinet='$editCabinet', Cover='$editCover', Base='$editBase', Insulation='$editInsulation', Ozone='$editOzone', Stereo='$editStereo', Filter='$editFilter', Extra1='$editExtra1', Extra2='$editExtra2', Extra3='$editExtra3', Extra4='$editExtra4', Extra5='$editExtra5', Extra6='$editExtra6', Manf='$editManf', Lighting='$editLighting',  ColourInclude='$editColourInclude', IncludeAfter='$editIncludeAfter', DetailTxt='$editDetailTxt',  SeatingTxt='$editSeatingTxt',  HeatingTxt='$editHeatingTxt', FeatureTxt='$editFeatureTxt', ConstructionTxt='$editConstructionTxt', PowerTxt='$editPowerTxt', FilterTxt='$editFilterTxt', ControlTxt='$editControlTxt', JetsTxt='$editJetsTxt',  LightingTxt='$editLightingTxt', WarrantyInclude='$editWarrantyInclude' WHERE Name='$editname'");
header("location:login_success.php");  
?>