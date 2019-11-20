<?php
//If the form is submitted
      $hasError1 = "";
      $hasError2 = "";
 if(isset($_POST['Userkey'])) {
    if (strtolower(trim($_POST['Userkey'])) == '') {
          $hasError1 = true;         
    } elseif (strtolower(trim($_POST['Userkey'])) == 'goalface2010') {
          header( "Location: http://www.goalface.com/register" );
    } elseif (strtolower(trim($_POST['Userkey'])) == 'goalface4me') {
           header( "Location: http://www.goalface.com/register" );   
    } elseif (strtolower(trim($_POST['Userkey'])) == 'happynewyear') {
           header( "Location: http://www.goalface.com/register" );
           $remote = $_SERVER['REMOTE_ADDR'];
		       // open connection to PROD Server BETA
		       $conn = mysql_connect("localhost","goalface_siteusr","ch0ch3r@z");
			     // open connection to DEV Server
			     //$conn = mysql_connect("localhost","goalface_user","Pa55w0rd");
			
			     // select dbase to use
			     mysql_select_db("goalface_site",$conn);
    
			     //create sql statement
			     $sql = "insert into register_open_beta(remote_address,regcreated) values ('$remote',now())";
    
			     // execute sql statement
			     $result = mysql_query($sql,$conn) or die(mysql_error($conn));          
    } else {
           $hasError2 = true;			
    }
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GoalFace</title>
<link type="text/css" rel="stylesheet" href="css/invitation.css" />


     <script type="text/javascript" src="scripts/jquery-1.2.6.js"></script>
     <script type="text/javascript" src="scripts/common.js"></script>
     <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6160648-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<body>
<div class="main"><div class="special"><a href="http://www.goalface.com/invitation"><img src="images/special.jpg" alt="" width="574" height="54" border="0" /></a></div>
<div class="joincommunity"><img src="images/join.jpg" alt="" width="576" height="37" border="0" /></div>
<div class="logo" style="padding-bottom:20px;"><a href="#"><img src="images/logo.jpg" alt="" width="443" height="232" border="0" /></a></div>

  <div class="fotoer"><span>Use your GoalFace key to enter the site.</span><br />
  <?php if ($hasError1 == 'true') { //If errors are found ?>  
        <p class="error">Please enter the key from your invitation</p>
                 
    <?php } elseif ($hasError2 == 'true')  { ?>
        <p class="error">The key entered is invalid.  Check the invitation and try again</p>
    <?php }  ?>
	<ul class="key">
		<li>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label style="">Key :</label>
			<input  class="text" type="text" name="Userkey"/>
			<input  class="submit" type="submit" value=""/>
		</form>		
		</li>
	</ul>
	<div class="key2">
		<span class="white">Don't have a GoalFace key?</span>&nbsp;<span class="orange"><a href="http://www.goalface.org/register.html">Click here to get one.</a></span>
	</div>
  </div>
  
  <div class="content">
  <p class="bulletstitle">When you join GoalFace you get:</p>
  <ul>
    <li>News, scores and schedules from the top professional leagues and tournaments 
around the world.</li>
    <li>In-depth profiles and statistics on your favorite professional teams and players.</li>
    <li>Customizable news, scoreboards and feeds to keep up with the teams, players, <br />
      leagues and tournaments you care about.</li>
    <li>Plus a whole lot more!</li>
  </ul>
  </div>
  
  <div class="followuscontainer">
          <span>Follow us on</span>
          <a target="_blank" href="http://www.twitter.com/goalface">
            <img alt="Follow us on Twitter" src="images/logo_twitter.png">
          </a>
          <a target="_blank" href="http://www.facebook.com/goalface">
            <img alt="Follow us on Facebook" src="images/logo_facebook.png" class="lasticon">
          </a>
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

                     
