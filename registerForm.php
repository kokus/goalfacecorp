<?php
  // open connection to PROD Server BETA
  $conn = mysql_connect("localhost","goalface_siteusr","ch0ch3r@z");
  // open connection to DEV Server
  //$conn = mysql_connect("localhost","goalface_user","Pa55w0rd");
  
  // select dbase to use
  mysql_select_db("goalface_site",$conn);

  // Pick up the form email data and assign it to a variable
  $email = $_POST['email'];
  $name = $_POST['name'];
  $country = $_POST['country'];
  $language = $_POST['language'];
	$dobday = $_POST['birth_day'];
	$dobmonth = $_POST['birth_month'];
	$dobyear = $_POST['birth_year'];
	$sql_dob = "	$dobyear" . "-" . "$dobmonth" . "-" . "$dobday";
  $errorMessage = "";

  if(empty($email)) $errorMessage .= "You didn't enter an email address.<br/>\n"; 
  
   //if there was no error, do the rest of the code.
  if(empty($errorMessage))
  { 
        //insert user in the pre-registration table
       $qry = "insert into register_alpha(email,name,dob,country,language,regcreated) values ('$email','$name','$sql_dob','$country','$language',now())";

       $result = mysql_query($qry,$conn) or die(mysql_error($conn));

       //prepare to send email
       $conf_to = "$email";
       $conf_subject = "Thank you for your interest in GoalFace!";  
       $conf_body   = "Hi ".$conf_to.",<BR><BR>Your GoalFace application has been received and is currently under review by our scouts. If 
      things check out, you'll receive an email invitation to be among the elite on GoalFace. Please remember to 
      include <a href=\"mailto:community@goalface.com\">community@goalface.com</a> in your email address book to 
      ensure you receive the invitation.<br><br>Cheers!<br>The GoalFace Team\r\n";
       $conf_headers  = 'MIME-Version: 1.0' . "\r\n";
       $conf_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       // Additional headers
       $conf_headers .= 'From: GoalFace Team <community@goalface.com>' . "\r\n";
       $conf_headers .= 'Reply-To: community@goalface.com' . "\r\n";
       
        // Send the confirmation mail using PHPs mail() function
        mail($conf_to, $conf_subject, $conf_body, $conf_headers);
        
        //redirect
        header("Location: registrationconfirmation.php");
  
  } else {
        echo $errorMessage; 
  }


?>
