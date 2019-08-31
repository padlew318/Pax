<?php
// Check if session is not registered , redirect back to main page. Put this code in first line of web page.
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>
<H1>Site Admin</H1>

<?php
include($_SERVER[DOCUMENT_ROOT].'../layout/conectchem.php');

// Define $editrow 
$editname=$_POST['editname']; 
$editprice=$_POST['editprice']; 
$edittradeprice=$_POST['edittradeprice']; 
$editInfo=$_POST['editInfo']; $editInfo=str_replace("'", "",$editInfo); 


//echo $editrow;

// To protect MySQL injection (more detail about MySQL injection)
//$editrow = stripslashes($editrow);
//$editrow = mysql_real_escape_string($editrow);

mysql_query("UPDATE $tbl_name SET Price='$editprice', TradePrice='$edittradeprice', Info='$editInfo' WHERE Name='$editname'");
header("location:login_success.php");  
?>