<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to GoalFace</title>
<link href="css/goal_face.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="goal_face.ico" type="image/x-icon" />

<script src="scripts/jquery.min.js" type="text/javascript"></script>
<script src="scripts/slides.min.jquery.js" type="text/javascript"></script>
<script src="scripts/validate.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript" ></script>
<script type="text/javascript">
	$(function(){
		var startSlide = 1;
		if (window.location.hash) {
			startSlide = window.location.hash.replace('#','');
		}
		$('#slides').slides({
			preload: true,
			preloadImage: 'img/',
			generatePagination: true,
			play: 0,
			pause: 2500,
			hoverPause: true,
			start: startSlide,
			animationComplete: function(current){
			}
		});
	});
</script>

<script type="text/javascript">

$(document).ready(function() {

		$("#email").keyup(function(){

			var email = $("#email").val();

			if(email != 0)
			{
				if(isValidEmailAddress(email))
				{
					$("#validEmail").css({
						"background-image": "url('images/validyes.png')"
					});
				} else {
					$("#validEmail").css({
						"background-image": "url('images/validno.png')"
					});
				}
			} else {
				$("#validEmail").css({
					"background-image": "none"
				});
			}

		});

	});



	function isValidEmailAddress(emailAddress) {
 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 		return pattern.test(emailAddress);
	}



  function registerUser(){

		var nm = document.getElementById('ErrorMessages');
		if(nm.className == 'ErrorMessagesDisplay'){
        	nm.className = 'ErrorMessages';
		}

		valid = validaNewForm('cform');

		if(!valid){
			return;
		}

		document.regform.action="registerForm.php"
		document.regform.submit();
      }

</script>
</head>

<body id="home">
<!-- main wrapper start here -->
<div class="main_wrapper">
    <?php include "header.php";?>

    <!-- main body content wrapper start here -->
    <div class="main_body_content_wrapper">
      <div class="banner">
			 <div class="bannerlo">
				<!-- banner -->
						<div id="container">
							<div id="slides">
								<div class="slides_container">
									<div class="slide">
											<div class="bannerinside ">
												<div class="bannerleft">
													<h1>Football Everywhere!</h1>
													<h2>Professional football for fans everywhere.</h2>
													<p class="bannertext">GoalFace delivers football from leagues and tournaments in the Americas, Africa, Asia and Europe to your device, email inbox, and
more. It’s 100% football, and it’s FREE!</p>
													<p class="signup"><a href="http://www.goalface.com/register.php" target="_blank">Pre-Register Now!</a></p>
												</div>
												<p class="bannerrightimg"><img src="images/sliderimg.png" alt=""/></p>
											</div>
									</div>
									<div class="slide">
											<div class="bannerinside ">
												<div class="bannerleft">
													<h1>Football When You Want It!</h1>
													<h2>Professional football to you anytime, on demand.</h2>
													<p class="bannertext">GoalFace delivers live football scores, match alerts, goals, news and other updates to your email inbox, mobile phone and more whenever you want them.</p>
												  <p class="signup"><a href="http://www.goalface.com/register.php" target="_blank">Pre-Register Now!</a></p>
												</div>
												<p class="bannerrightimg"><img src="images/Integrates.png" alt=""/></p>
											</div>
									</div>
								</div>
								<a href="#" class="prev"><img src="images/leftarw.png" width="9" height="19" alt="Arrow Prev"/></a>
								<a href="#" class="next"><img src="images/rightarw.png" width="9" height="19" alt="Arrow Next"/></a>
								<div class="sociallink">
									<ul>
										<li><a href="http://www.facebook.com/goalface" target="_blank"><img src="images/newfacebook.png" alt="Facebook GoalFace"/></a></li>
										<li><a href="http://www.twitter.com/goalface" target="_blank"><img src="images/newtwitter.png" alt="Twitter GoalFace"/></a></li>
										<!--<li><a href="#"><img src="images/gplus.png" alt=""/></a></li>
										<li><a href="#"><img src="images/youtube.png" alt=""/></a></li>-->
									</ul>
								</div>
							</div>
					</div>
				<!-- banner -->
			 </div>
			</div>
			<div class="midinside">
      			<div class="midleftbg">
      				<div class="midimages">
      					<ul>
      						<li><a href="http://www.goalface.com" target="_blank"><img src="images/newimg1.jpg" alt=""/></a></li>
      						<li><a href="http://www.goalface.com" target="_blank"><img src="images/newimg2.jpg" alt=""/></a></li>
      						<li><a href="http://www.goalface.com" target="_blank"><img src="images/newimg3.jpg" alt=""/></a></li>
      					</ul>
      				</div>
      				<p class="favorites">All of your favorites in one place and everywhere!</p>
      				<p class="favourtext">Player profiles, team pages, and league & tournament match calendars for all your favorites together in one place and available to
you on your mobile device, desktop, TV, and your email inbox.</p>
      				<p class="visit2"><a href="tour.php" target="_blank">Take the Quick Tour &raquo;</a></p>
      			</div>
      			<div class="midleftbg">
      				<p class="newimg"><a href="tour.php"><img src="images/midimg.png" alt=""/></a></p>
      				<p class="favorites">Find out what makes GoalFace great!</p>
      				<p class="favourtext">A personal dashboard to help you organize, manage, and follow your favorite teams, players, leagues and tournaments around the
world in a place that is 100% football. No more searching the web or visiting dozens of websites to keep up with your favorites!</p>
      				<p class="visit2"><a href="tour.php" target="_blank">Take the Quick Tour &raquo;</a></p>
      			</div>
      			<div class="midleftbg">
      				<p class="newimg"><a href="register.php" target="_blank"><img src="images/joinnow.png" alt=""/></a></p>
      				<p class="favorites">Football where and how you want it!</p>
      				<p class="favourtext">Updates for players and teams in the leagues and tournaments you care about most! GoalFace notifications and alerts keep you
close to the action no matter where you are!</p>
      				<p class="visit2"><a href="register.php" target="_blank">Pre-Register Today. It's 100% football! &raquo;</a></p>
      			</div>
      	</div>
    </div>

    <?php include "footer.php";?>

</div>
<!-- main wrapper end here -->

</body>
</html>
