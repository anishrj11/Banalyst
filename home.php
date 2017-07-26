<?php 
  session_start();
  if (!isset($_SESSION['email'])){
  header('location: index.php');
  }
  else{
      echo '<div class="container">
            <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center>You have been successfully <strong>Signed In!</strong> .</center>
            </div>
            </div>';
  }  
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
<style>
.timer p{
	text-align: center;
	font-size: 60px;
}
.timer h3{
    text-align: center;
    font-family: sans-serif;
    color: cadetblue;
    }
</style>
</head>
	
<body>
<!-- header -->
	<div class="header">
			<div class="container">
			<div class="agile_header_grid">
				<div class="w3_agile_logo">
					<h1><a href="home.php"><span>B</span>analyst</a></h1>
				</div>
				<div class="agileits_w3layouts_sign_in">
					<ul>
						<li><a href="logoutcode.php" class="play-icon popup-with-zoom-anim">Logout</a></li>
						<li><span>Welcome User!</span></li>
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
								<li class="active"><a href="home.php">Home</a></li>
								<li><a href="contact2.php" class="hvr-sweep-to-bottom">Contact</a></li>
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
<!-- //header -->	
<!-- banner -->	
	<div class="banner">
		<div class="container">
			<h2>we provide analysis on improving <span>business</span></h2>
			<br>
			<div class="agileits_more">
				<ul>
					<li><a href="upload_form/upload_file.php" class="w3ls_banner_more hvr-icon-hang">Submit Analysis Request</a></li>
					<li><a href="finalsolution.php" class="w3ls_banner_more hvr-icon-hang">View Analysis Results</a></li>
				</ul>
			</div>
			<div class="wthree_banner_grids">
				<div class="col-md-3 wthree_banner_grid">
					<i class="fa fa-desktop" aria-hidden="true"></i>
					<h4>customized solution</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<i class="fa fa-money" aria-hidden="true"></i>
					<h4>Minimal Cost</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<i class="fa fa-users" aria-hidden="true"></i>
					<h4>professional team</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
					<h4>Quick Results</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-8 w3l_banner_bottom_left">
				<h3>What you're going to achieve with us!</h3>			
			</div>
			<div class="col-md-8" style="height:250px; border:0;"><br><br>
			With the help of our software you will get an overview of the sales of each outlets.<br><br>
			It will also show which product is having the maximum sales in each individual outlets, <br>so that it can increase the supply of that individual product.<br><br>
			By the help of graphs, tables and pie charts the manager can visualize which particular <br>outlet is completing the sales target and which needs improvement.<br><br>
			</div>
			<div class="col-md-4"><img src="images/logo.png" style="height:200px;width:200px;"/></div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- two-grids -->
<div class="clearfix"></div>
	<div class="two-grids">
		<div class="col-md-6 w3_two_grid_left">
			<img src="images/22.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 w3_two_grid_right">
			<h3>How you should proceed?</h3>
			<div class="w3_two_grid_right1">
				<div class="col-xs-3 w3_two_grid_right_grid">
					<div class="w3_two_grid_right_grid1">
						<i class="fa fa-external-link" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-9 w3_two_grid_right_gridr">
					<h4>Click on "Submit Analysis Request"</h4>
					<p>Upload file in <strong>Archive(.zip or .rar)</strong> format only!</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_two_grid_right1">
				<div class="col-xs-3 w3_two_grid_right_grid">
					<div class="w3_two_grid_right_grid1">
						<i class="fa fa-folder-open" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-9 w3_two_grid_right_gridr">
					<h4>After Submitting Request</h4>
					<p>You will be redirected to <strong>solution page!</strong></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_two_grid_right1">
				<div class="col-xs-3 w3_two_grid_right_grid">
					<div class="w3_two_grid_right_grid1">
						<i class="fa fa-spinner" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-9 w3_two_grid_right_gridr">
					<h4>Waiting Time</h4>
					<p>The time until result appears is shown by <strong>Timer</strong>.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_two_grid_right1">
				<div class="col-xs-3 w3_two_grid_right_grid">
					<div class="w3_two_grid_right_grid1">
						<i class="fa fa-file-text-o" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-xs-9 w3_two_grid_right_gridr">
					<h4>For Queries & Complaints</h4>
					<p>Browse to our <strong>Contact page!<strong></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //two-grids -->
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
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
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