<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tour - GoalFace</title>
<link href="css/goal_face.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="goal_face.ico" type="image/x-icon" />

  <script type="text/javascript" src="scripts/jquery-1.2.6.js"></script>
  <script type="text/javascript" src="scripts/iutil.js"></script>
  <script type="text/javascript" src="scripts/islideshow.js"></script>

  
<style type="text/css" media="screen">

	a {
		text-decoration: none;
	}
	
	
	#slideShow {
		width: 556px;
		height: 835px;
		border: 0px solid #dadada;
		padding: 10px;
		background-color: #fff;
		margin: 10px 10px 10px 10px;
	}
	
	.slideshowLinks {
		width: 360px;
		padding: 10px 0 0 0;
		margin: 0 auto;
		text-align: center;
		z-index: 99999;
		margin-bottom:10px;
	}
	
	.slideshowHolder {
		/*margin: -310px 0 0 0;  was -140px*/
		margin-top:20px;
	
	}
	
	.slideshowHolder img {
		padding: 4px;
		border: 1px solid #ddd;
		
	}
	
	.pagelinks a {
		font-weight: bold;
		color: #666;
		font-size: 16px;
		padding: 3px;
		margin: 0 0px;
		border: 1px solid #dadada;
		padding: 5px 5px;
	}
	
	.slideCaption {
		font-family:Arial, Helvetica, sans-serif;
		font-size: 12px;
		color: #222;
		margin: 0;
		padding: 0;
		width: 536px;
		min-height: 50px;
		background: #E6EFF4;
		padding: 10px;
		margin: 15px 0 15px 0;
		text-align: left;
		line-height: 20px;
	}
	
	.pagelinks a.activeSlide {
		color: #222;
		background: #dadada;
	}
	
	/* this is for IE so the prev/next links can be hovered*/
	.nextSlide,.prevSlide {
		width: 80px;
		background-image: url(images/tour/spacer.gif);
		margin: -430px 0 0 0;
		height: 28px;
	
	}
	
	.nextSlide {
		background-image: url(images/tour/next.gif);
		background-repeat: no-repeat;
		background-position: right top;
	}
	
	.prevSlide {
		background-image: url(images/tour/prev.gif);
		background-repeat: no-repeat;
		background-position: left top;
	}
</style>


<script type="text/javascript">
	
      $(document).ready(
      	function()
      	{
      		$.slideshow(
      			{
      				container : 'slideShow',
      				loader: 'images/tour/ajax-loader.gif',
      				linksPosition: 'top',
      				linksClass: 'pagelinks',
      				linksSeparator : '',
      				fadeDuration : 400,
      				activeLinkClass: 'activeSlide',
      				nextslideClass: 'nextSlide',
      				prevslideClass: 'prevSlide',
      				captionPosition: 'top',
      				captionClass: 'slideCaption',
      				autoplay: 10,
      				images : [
      					{
      						src: 'images/tour/slide1.jpg',
      						caption: '<strong>What is GoalFace?: </strong> Take the networking power of Facebook and Twitter, and combine it with the scores and coverage from your favorite football news source. That\'s GoalFace. All your favorites and fellow fans from around the world in a place that is 100% football.'
      					},
      					{
      						src: 'images/tour/slide2.jpg',
      						caption: '<strong>Dashboard: </strong> A personal, customizable dashboard to follow your favorites players, teams and leagues around the world.  With GoalFace you\’ll always have your finger on the pulse of the beautiful game.'
      					}, 
      					{
      						src: 'images/tour/slide3.jpg',
      						caption: '<strong>Players Profiles: </strong>GoalFace helps you follow your favorite players.  You can access profiles for 100,000+ professional players around the world. Coverage includes alerts, current and historical career statistics, on-field updates, photos and a lot more.'
      					},
      					{
      						src: 'images/tour/slide4.jpg',
      						caption: '<strong>Teams Profiles: </strong>GoalFace has your favorite teams covered.   View current rosters, news, scores, schedules and historical league performance information, along with live updates for 5,000+ club and national teams worldwide.'
      					},
      					{
      						src: 'images/tour/slide5.jpg',
      						caption: '<strong>Head-to-Head Comparisons: </strong> Cristiano Ronaldo vs. Messi.  Barcelona vs. Arsenal.  GoalFace provides the tools you need to compare team vs. team and player vs. player in an easy-to-use, head-to-head format.'
      					},
      					{
      						src: 'images/tour/slide6.jpg',
      						caption: '<strong>Scores & Schedules :</strong> La Liga, MLS, Copa Libertadores, World Cup… GoalFace brings together scores, schedules and other coverage from the international and domestic leagues, tournaments and cups you care about in a single place that is 100% football.'
      					},      					
      					{
      						src: 'images/tour/slide7.jpg',
      						caption: '<strong>News:</strong> GoalFace has the 4-1-1 on the leagues and tournaments you follow.  Stay up to date with breaking football news from around the world. Like what you\'re reading? Bookmark and share it with others on GoalFace or across the Web!'
      					},
      					{
      						src: 'images/tour/slide8.jpg',
      						caption: '<strong>Pictures:</strong> GoalFace provides the best football photography on the Web.  See your favorite players in action from leagues and tournaments around the world.'
      					},
                		{
      						src: 'images/tour/slide9.jpg',
      						caption: '<strong>Fan Profiles :</strong>GoalFace provides you with a calling card to the global football community in the form of your very own, customizable profile. Display and cheer on your favorite teams and players, connect with other GoalFace members like you, post comments and keep up with friends and a whole lot more!'
      					},
						      					{
      						src: 'images/tour/slide10.jpg',
      						caption: '<strong>Subscriptions & RSS: </strong>  GoalFace brings the beautiful game to you&mdash;when, where, and how you want it.  You won\'t have to come to the site to get your football fix.  Subscribe to alerts and updates and GoalFace will bring player, team and league news and scores to you!.'
      					},
      					{
      					  src: 'images/tour/slide11.jpg',
      						caption: '<strong>Community:</strong> GoalFace has a rich community filled with fans like you all around the world! Message boards, Blogs, Groups and other social media features dedicated to the leagues, teams and players you love most.'
      					} 
      				]
      			}
      		)
      	}
      );
    </script>    
    
</head>

<body id="tour">
<!-- main wrapper start here -->
<div class="main_wrapper">
    <?php include "header.php";?>
    
    <!-- main body content wrapper start here -->
    <div class="main_body_content_wrapper">
    		<!-- main body content single wrapper start here -->
       
    			
          			<div class="tour">
                
                        <div id="slideShow" class="tourimg">
                       
                        </div>
                        
                        
                      <!---   <p class="tour_text">Finally, a home for fans like you to share their passion for football in a vibrant and engaging community experience. What are you waiting for? <a href="#">Join now and put on your best GoalFace!</a></p> --->
                        <div class="easy"><a href="http://www.goalface.com/user/register" target="_blank"><img src="images/easy.png" alt="" /></a></div>
                    </div>



           
          <!--  main body content single wrapper end here -->
    </div>
    <!-- main body content wrapper end here -->
    
    <?php include "footer.php";?>

</div>
<!-- main wrapper end here -->
</body>
</html>
