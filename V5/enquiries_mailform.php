<?php

if ($_POST['foo'] != '')
	 {
    echo'SCF';
    }
  else
    {
   


function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }
  
  

if (isset($_POST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_POST['email']);
  if ($mailcheck==FALSE)
    {
   header( 'Location: enquiries_error.php' ) ;
    }
  else
    {
		$to = "jenpax1@yahoo.co.uk";
		//$to = "padlew318@yahoo.co.uk";
$subject = "Enquiry from Pax Place Website (Enquiries Form)";
$name = $_POST['name'] ;
	$add1= $_POST['add1'];
	$add2= $_POST['add2'];
	$town= $_POST['town'];
	$county= $_POST['county'];
	$postcode= $_POST['postcode'];
	$teleph= $_POST['teleph'];
	$telepm= $_POST['telepm'];
	$fromDate= $_POST['fromDate'];
	$toDate= $_POST['toDate'];
	$email = $_POST['email'] ;
	$thbg = "#88A9E6";
$message = "
<html>
<head>
<title>Enquiry from Pax Place Website (Contact Us Form)</title>
</head>
<body>
<p>You have an enquiry from paxplace.co.uk website</p>
<table bgcolor='#D7F3F4' border='1px solid #666666' cellpadding='6px' cellspacing='0'>
<tr>
<th align='right' bgcolor='$thbg'>Name :</th>
<td>" . $name . "</td>
</tr>
<tr>
<th align='right' bgcolor='$thbg'>Address line 1 :</th>
<td>" . $add1 . "</td>
</tr>
<tr>
<th align='right' bgcolor='$thbg'>Address line 2 :</th>
<td>" . $add2 . "</td>
</tr>
<tr>
<th align='right' bgcolor='$thbg'>Town :</th>
<td>" . $town . "</td>
</tr>
<tr>
<th align='right' bgcolor='$thbg'>County :</th>
<td>" . $county . "</td>
</tr>
<tr>
<th align='right' bgcolor='$thbg'>Postcode :</th>
<td>" . $postcode . "</td>
</tr>
<tr>
<th align='right' bgcolor='$thbg'>Telephone (Landline) :</th>
<td>" . $teleph . "</td>
</tr>
<tr>
<th align='right' bgcolor='$thbg'>Telephone (Mobile):</th>
<td>" . $telepm . "</td>
</tr>
<tr>
<th align='right' bgcolor='$thbg'>Arrival Date :</th>
<td>Friday " . $fromDate . " 2017</td>
</tr>
<tr>
<th align='right' bgcolor='$thbg'>Departure Date :</th>
<td>Friday " . $toDate . " 2017</td>
</tr>

<tr>
<th align='right' bgcolor='$thbg'>Email :</th>
<td>" . $email . "</td>
</tr>
</table>
<p>Please do not reply to this email, it comes from the website not the person filling in the form.</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: paxplace.co.uk' . "\r\n";
$headers .= 'Cc: paddy@pagancomputers.co.uk' . "\r\n";

mail($to,$subject,$message,$headers);
   header( 'Location: enquiries_success.php' ) ;
    }
  }
else
  {//if "email" is not filled out, display the form
   header( 'Location: enquiries_error.php' ) ;
    }
}
?>