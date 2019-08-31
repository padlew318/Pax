<?php
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
   header( 'Location: enquiries.php' ) ;
    }
  else
    {//send email
	$name = $_POST['name'] ;
	$add1= $_POST['add1'];
	$add2= $_POST['add2'];
	$town= $_POST['town'];
	$county= $_POST['county'];
	$postcode= $_POST['postcode'];
	$telep= $_POST['telep'];
	$fromDate= $_POST['fromDate'];
	$toDate= $_POST['toDate'];
	$email = $_POST['email'] ;
	
    mail("paddy@pagancomputers.co.uk.co.uk", "Subject: Enquiry from Pax Place Website (Contact Us Form)", "Name : " . $name . PHP_EOL . "Address Line 1 : " . $add1 . PHP_EOL . "Address Line 2 : " . $add2 . PHP_EOL . "Town : " . $town . PHP_EOL . "County : " . $county . PHP_EOL . "Postcode : " . $postcode . PHP_EOL . "Telephone : " . $telep . PHP_EOL . "Arrival Date : " . $fromDate . PHP_EOL . "Departure Date : " . $toDate . PHP_EOL . "Email : " . $email);
   header( 'Location: enquiries.php' ) ;
    }
  }
else
  {//if "email" is not filled out, display the form
   header( 'Location: enquiries.php' ) ;
    }
?>
				
				
				
