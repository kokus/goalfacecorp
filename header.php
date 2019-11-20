<script type="text/javascript">

jQuery(document).ready(function() {

	jQuery('#emailaddressForm').focus();

	jQuery('#loginIdButton').click(function(){
		login();
	});

	jQuery(document).keydown(function(event) {
		if (event.keyCode == 13) {
			login();
		}
	});  
 });

function login(){

	var emailaddress =  jQuery('#emailaddressForm').val();
	var password =  jQuery('#passwordForm').val();

	jQuery.ajax({
			type: 'POST',
			dataType : 'script',
			data: ({username: emailaddress , password : password }),
			url: 'http://goalface.vgmediagroup.com/login/dologin',
			success: function(data){
				
	    	}	
	 });	

}
</script>

	<!-- main header wrapper start here -->

  
  <div class="main_header">
    <form name="name1" method="post">
      <a href="index.php" title="Goal Face" style="float:left;">
       <!---  <img src="images/goal_face_logo.jpg" alt="Goal Face" />--->
       <img src="images/CorpSiteLogo.png" alt="Goal Face" />
      </a>

      
      
<!---       <div class="login_box_wrapper">
      	<p style="font-weight:bold; width:100%; margin-bottom:5px; color:#FFFFFF; font-size:14px;">Already a Member?</p>
          
          <div style="width:150px; font-size:11px; line-height:17px; float:left;">
          	Email Address:<br />
  			<input type="text" value="" name="emailaddress" style="font-size:11px; width:94%;margin-bottom:0;" />
          </div>
          <div style="width:150px; font-size:11px; line-height:17px; float:left;">
          	Password:<br />
  			<input type="password" value="" name="passwordForm" style="font-size:11px; width:94%;margin-bottom:0;" /><br />
  			&nbsp;<a href="#" title="Forgot you password?" style="color:#0071bc; text-decoration:none; font-weight:bold;">Forgot you password?</a>
          </div>
          <input type="image" id="loginIdButton" src="images/login.jpg" value="" style="float:left; width:40px; height:18px; margin-top:17px;" />
          
      </div> --->
      
      
<!--      <div class="followuscontainer">
          <span>Follow us on</span>
          <a target="_blank" href="http://www.twitter.com/goalface">
            <img alt="Follow us on Twitter" src="images/logo_twitter.png">
          </a>
          <a target="_blank" href="http://www.facebook.com/goalface">
            <img alt="Follow us on Facebook" src="images/logo_facebook.png" class="lasticon">
          </a>
      </div> -->
      
      <div class="follow">Follow us on
      	 <a target="_blank" href="http://www.facebook.com/goalface"><img alt="" src="images/newfacebook.png"></a>
      	 <a target="_blank" href="http://www.twitter.com/goalface"><img alt="" src="images/newtwitter.png"></a>
      </div>
     </form>   
    </div>
    
    

  
  
    <!-- main header wrapper end here -->
    <!-- main navigation wrapper start here -->
	<div class="main_navigation_wrapper">
    	<div class="main_navigation_left_right"><img src="images/navigation_left.jpg" alt="" /></div>
        <div class="main_navigation_middle">
        	<ul>
            	<li id="nav-home"><a href="index.php">Home</a></li>
                 <li id="nav-tour"><a href="tour.php">QUICK TOUR</a></li>
            	<li id="nav-aboutus"><a href="aboutus.php">ABOUT US</a></li>
               <!-- <li id="nav-register"><a href="register.php">REGISTER</a></li>-->
                <li id="nav-services"><a href="services.php">SERVICES</a></li>
            	<li id="nav-advertise"><a href="advertise.php">ADVERTISE</a></li>
                <li id="nav-contactus"><a href="contactus.php">CONTACT</a></li>
          </ul>        
        </div>
    	<div class="main_navigation_left_right"><img src="images/navigation_right.jpg" alt="" /></div>
    </div>
    <!-- main navigation wrapper end here -->

