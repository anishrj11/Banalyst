<?php 
  session_start();
  if (isset($_SESSION['email']))
  header('location: home.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Analytics for Business Solution</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- pop-up-box -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up-box -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="agile_header_grid">
				<div class="w3_agile_logo">
					<h1><a href="index.php"><span>B</span>analyst</a></h1>
				</div>
				<div class="agileits_w3layouts_sign_in">
					<ul>
						<li><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></li>
						<li>Call us : <span>(+91)8908502955</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_agileits_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="services.php" class="hvr-sweep-to-bottom">Services</a></li>
								<li><a href="about.php" class="hvr-sweep-to-bottom">About</a></li>
								<li><a href="contact1.php" class="hvr-sweep-to-bottom">Contact</a></li>
							</ul>
							<div class="agileinfo_search">
								<form action="#" method="post">
									<input type="text" name="Search" placeholder="Type text here..." required="">
									<input type="submit" value=" ">
								</form>
							</div>
						</nav>
					</div>
				</nav>	
			</div>
		</div>
	</div>
<!-- pop-up-box -->
<?php
include('modal.php');
?>
<!-- //pop-up-box -->

<!-- banner -->	
	<div class="banner1">
		<h3>About Us</h3>
	</div>
<!-- //banner -->		
<!-- about -->
	<div class="about">
		<div class="container">
			<div class="agileinfo_about_grids">
				<div class="col-md-8 agileinfo_about_grid_left">	
					<div class="wthree_about_grid">
						<h3>welcome to <span>Banalyst</span></h3><br>
						<h5>Business Analysis is very important aspect of todays growth oriented market that always seeks to improvise in current trends to beat competitors.<br><br>
The main objective of our project is to analyze the sales outcome of the multiple outlets of a company and suggest needful improvements.<br><br>
We are here to provide details about the sales of individual products which is having the maximum demand and which needs more advertisements.<br><br>
We will show all these statistics of the sales (in the form of graphs and tables) as well as provide solutions to maximize the overall profit of the company.</h5>
					</div>
				</div>
				<div class="col-md-4 agileinfo_about_grid_right">
					<img src="images/90.jpg" alt="growth" class="img-responsive" style="height:80%;width:80%"/>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- about -->
<!-- team -->
	<div class="services">
		<div class="container">
			<h3 class="agile_head">Meet Our Team</h3>
			<p class="w4_agile_para"></p><br>
			<div class="w4layouts_team_grids">	
				<div class="col-md-4 w3layouts_team_grid">
					<div class="w4l_team_grd">
						<div class="w4_team_grid">
							<h4>Anwesha Dutta</h4>
							<h5>Web Developer / Analyst</h5>
							
							<ul class="title">
								<li><a href="#" class="w4_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w4_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 w4layouts_team_grid">
					<div class="w4l_team_grd">
						
						<div class="w4_team_grid">
							<h4>Aditi Mohanty</h4>
							<h5>Data Analyst</h5>
							
							<ul class="title">
								<li><a href="#" class="w4_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w4_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 w4layouts_team_grid">
					<div class="w4l_team_grd">
						
						<div class="w4_team_grid">
							<h4>Anish Jha</h4>
							<h5>PHP Developer</h5>
							
							<ul class="title">
								<li><a href="#" class="w4_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w4_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 w4layouts_team_grid">
					<div class="w4l_team_grd">
						<div class="w4_team_grid">
							<h4>Anurag Singh</h4>
							<h5>Content Writer</h5>
							
							<ul class="title">
								<li><a href="#" class="w4_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w4_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 w4layouts_team_grid">
					<div class="w4l_team_grd">
						<div class="w4_team_grid">
							<h4>Ankita Mahapatra</h4>
							<h5>Content Writer</h5>
							
							<ul class="title">
								<li><a href="#" class="w4_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w4_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- stats -->
	<div class="stats">
		<div class="wthree_stat">
			<div class="container">
				<div class="col-md-5 wthree_stat_left">
					<h3>Our Stats</h3>
					<p>These are the statistics of our websites</p>
				</div>
				<div class="col-md-7 wthree_stat_right">
					<ul>
						<li>
							<div class="wthree_stat_right1">
								<i class="fa fa-heart" aria-hidden="true"></i>
								<h4>People Visited</h4>
								<p class="counter">4</p> 
							</div>
						</li>
						<li>
							<div class="wthree_stat_right1">
								<i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>
								<h4>Data Analyzed</h4>
								<p class="counter">1</p> 
							</div>
						</li>
						<li>
							<div class="wthree_stat_right1">
								<i class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></i>
								<h4>Solutions Provided</h4>
								<p class="counter">1</p> 
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //stats -->
<!-- stats -->
	<script src="js/waypoints.min.js"></script> 
	<script src="js/counterup.min.js"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 20,
				time: 1000
			});
		});
	</script>
<!-- stats -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-4 w3_footer_grid">
					<h2><a href="index.php"><span>B</span>analyst</a></h2>
					<p>We will analyze your sales and provide business solutions to improve your business.</p>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<div class="w3l_footer_grid">
						<i class="fa fa-home" aria-hidden="true"></i>
					</div>
					<h4>Address</h4>
					<p>School of Computer Engineering, KIIT University</p>
				</div>
				<div class="col-md-2 w3_footer_grid">
					<div class="w3l_footer_grid">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<h4>Call Us</h4>
					<p>+(91)8908502955<span>+(91)7978857418</span></p>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<div class="w3l_footer_grid">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<h4>Mail Us</h4>
					<p><a href="mailto:anishrj11@gmail.com">anishrj11@gmail.com</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>