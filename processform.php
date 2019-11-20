<?php
if(isset($_POST['email'])) {

  // Pick up the form data and assign it to variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comments = $_POST['body'];
  
  // Build the email (replace the address in the $to section with your own)
 $to = "contact@goalface.com";
  $subject = "GOALFACE Corporate Contact FORM SUBMISSION: $subject";
  $body = "$name said: $comments";
  $headers = "From: $email";
  
  // Send the mail using PHPs mail() function
  mail($to, $subject, $body, $headers);
  
  // Redirect
  header("Location: contact_confirmation.php");

} else {

	
  die("Direct access not allowed!");

}
