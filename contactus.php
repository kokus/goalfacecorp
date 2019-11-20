

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us - GoalFace.com</title>
<link href="css/goal_face.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="goal_face.ico" type="image/x-icon" />


<script src="scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="scripts/validate.js" type="text/javascript"></script>


 <script type="text/javascript">
      
      function sendEmail(){
      
      var nm = document.getElementById('ErrorMessages');
      if(nm.className == 'ErrorMessagesDisplay'){
        	nm.className = 'ErrorMessages';
      }
      
      valid = validaNewForm('cform'); 
      
      if(!valid){
        return;
      }
      
  
      document.contactform.action="processform.php"
      document.contactform.submit();
      }
     </script>




</head>

<body id="contactus">
<!-- main wrapper start here -->
<div class="main_wrapper">
    <?php include "header.php";?>
    
    <!-- main body content wrapper start here -->
    <div class="main_body_content_wrapper">
    		<!-- main body content single wrapper start here -->
					<div class="main_body_content_single">

            <h3>Have a question, comment or something to say?
            If you’re a football fan, potential partner or someone who loves the game as much as we do, we’d love to hear from you!</h3>
            
            <p class="listbig">Send us a message by filling in all fields in the form below.</p>
            
              <div id="ErrorMessages" class="ErrorMessages">                   		
                <div id="MainErrorMessage">All Fields marked with (*) are required.Missing Fields are highlighted below.</div>
	              </div>
              
              
              <div class="wrapingformbox">
                   <div style="width: 64%; float: left;">
                      
  
                     <form id="cform" name="contactform" method="post">
                      <fieldset>
                          <div id="nameerror" class="ErrorMessageIndividual">You must enter your name</div>
                          <label for="name"><em>* </em>Name:</label>
                          <input type="text" id="name"  name="name" required="nn"/>
                          
                          <div id="emailerror" class="ErrorMessageIndividual">You must enter an Email Address</div>
                          <label for="email"><em>* </em>Email:</label>
                          <input type="text" id="email"  name="email" required="email"/>
                          
                          <div id="subjecterror" class="ErrorMessageIndividual">You must enter a Subject</div>
                          <label for="subject"><em>* </em>Subject:</label>
                          <input type="text" id="subject" name="subject" required="nn"/>
                          
                          <div id="bodyerror" class="ErrorMessageIndividual">You must enter a message</div>
                          <label for="message"><em>* </em>Message:</label>
                          <textarea id="textbody" cols="30" rows="9" name="body" required="nn"></textarea>
                          <label style="margin-top:10px;">
                          <input type="button" value="Submit" class="formbutton" onClick="sendEmail();">
                          </label>

                        </fieldset>
                      </form>    
                  </div>  

					</div>
				</div>
    </div>
    <!-- main body content wrapper end here -->
    
<?php include "footer.php";?>

</div>
<!-- main wrapper end here -->
</body>
</html>
