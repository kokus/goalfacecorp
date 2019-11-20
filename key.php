<?php
//If the form is submitted
      $hasError1 = "";
      $hasError2 = "";
if(isset($_POST['Userkey'])) {
    //Check to make sure that the key is not empty
     if (strtolower(trim($_POST['Userkey'])) == '') {
         $hasError = true;
     } else if (strtolower(trim($_POST['Userkey'])) != 'goalface4me') {
        $hasError = true;
     } else {
     
         $key = trim($_POST['Userkey']);
         
         //will be used in other pages to  check and prevent accessing pages directly throuhg a URL
          session_start(); 
          $_SESSION['key'] = 'ok';

         //header( "Location: betahome.html" ); 
         header( "Location: http://alpha.goalface.com/register" );
     }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <meta name="description" content="Welcome to GoalFace, the premier online community experience for fans of the Beautiful Game."/>
     <title>GoalFace – For fans of the Beautiful Game </title> 
     <meta http-equiv="content-language" content="en" />
	<link rel="shortcut icon" href="http://www.goalface.com/favicon.ico" type="image/x-icon"> 
     
	<link type="text/css" rel="stylesheet" href="css/all.css" />
     <script type="text/javascript" src="scripts/jquery-1.2.6.js"></script>
     <script type="text/javascript" src="scripts/common.js"></script>
    
</head>
<body>
	<div id="main">
			
		<div id="header">
				<strong class="logo"><a href="http://www.goalface.com">GoalFace</a></strong>
        <div class="followuscontainer">
          <span>Follow us on</span>
          <a href="http://www.twitter.com/goalface" target="_blank">
            <img src="images/logo_twitter.png" />
          </a>
          <a href="http://www.facebook.com/goalface" target="_blank">
            <img class="lasticon" src="images/logo_facebook.png" />
          </a>
        </div>
		</div>
		
		<!-- main navigation wrapper start here -->
	 <div class="main_navigation_wrapper">
    	<div class="main_navigation_left_right"><img src="images/navigation_left.jpg" alt="" /></div>
        <div class="main_navigation_middle">
        	<ul>
            	  <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>        
        </div>
    	<div class="main_navigation_left_right"><img src="images/navigation_right.jpg" alt="" /></div>
    </div>
    <!-- main navigation wrapper end here -->
			
			
			<div id="content">
					<div class="main-content-single">
            <h2>Welcome to the GoalFace Alpha.</h2>
<p>GoalFace is currently available to a select, invite only group of football fans.</p>

<p><strong>GoalFace Alpha Invitees:</strong><BR>
To access the site, please enter the key from the invitation you received in field below: </p>
                <?php if(isset($hasError)) { //If errors are found ?>  
                   <p class="error">Please enter the key that was sent to you.</p>
                         
                <?php } ?>
                
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                     <input type="text" size="20" name="Userkey">
                    
                     
                     <input type="submit" value="Submit" class="formbutton">
                     
                </form>
            
          
          <div class="joining_today_line keyline"><strong>Don’t Have an invitation for GoalFace?</strong><br>          
          <a href="register.html">Visit the GoalFace pre-registration form</a> if you don’t have the key. <a href="aboutus.html">Visit our About Us section</a> for more 
          information about GoalFace.
          </div>
            
					</div>
				</div>
		


	</div>
    
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-6160648-1";
urchinTracker();
</script>
</body>
</html>




