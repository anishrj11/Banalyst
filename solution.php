<?php 
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
	error_reporting(0);
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
<link rel="stylesheet" href="css/jquery.gallery.css">
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
	<div class="banner1">
		<h3>Results</h3>
	</div>
<!-- //banner -->
<!-- portfolio -->
	<div class="portfolio">
		<div class="container">
			<h3 class="agile_head">Graphical Rep.</h3>
			<p class="w3_agile_para">The graph of various items vs the prices</p>
		</div>
		<div class="w3_agile_portfolio_grids">
			<div class="agile_portfolio_grid">
				<div class="w3_agileits_portfolio_grid">
					<a href="images/food1 img 1.png" >
						<div class="view effect">
							<img src="images/food1 img 1.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 1</h4>
							</div>
						</div> 
					</a>
				</div>
				<div class="w3_agileits_portfolio_grid">
					<a href="images/food 2 img 2.png" >
						<div class="view effect">
							<img src="images/food 2 img 2.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 2</h4>
							</div>
						</div> 
					</a>
				</div>
				<div class="w3_agileits_portfolio_grid">
					<a href="images/food 3 img 3.png" >
						<div class="view effect">
							<img src="images/food 3 img 3.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 3</h4>
							</div>
						</div> 
					</a>
				</div>
					<div class="w3_agileits_portfolio_grid">
					<a href="images/food 10 img 10.png" >
						<div class="view effect">
							<img src="images/food 10 img 10.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 10</h4>
							</div>
						</div> 
					</a>
				</div>
			</div>
		
			<div class="agile_portfolio_grid">
				<div class="w3_agileits_portfolio_grid">
					<a href="images/food 4 img 4.png" >
						<div class="view effect">
							<img src="images/food 4 img 4.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 4</h4>
							</div>
						</div> 
					</a>
				</div>
				<div class="w3_agileits_portfolio_grid">
					<a href="images/food 5 img 5.png" >
						<div class="view effect">
							<img src="images/food 5 img 5.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 5</h4>
							</div>
						</div> 
					</a>
				</div>
			
			<div class="w3_agileits_portfolio_grid">
					<a href="images/food 6 img 6.png" >
						<div class="view effect">
							<img src="images/food 6 img 6.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 6</h4>
							</div>
						</div> 
					</a>
				</div>
				<div class="w3_agileits_portfolio_grid">
					<a href="images/sales-jan.png" >
						<div class="view effect">
							<img src="images/sales-jan.png" alt=" " class="img-responsive" height="150px" width="150px"/>
							<div class="mask"></div>
							<div class="content">
								<h4>Total Sales</h4>
							</div>
						</div> 
					</a>
				</div>
			</div>
			<div class="agile_portfolio_grid">
				<div class="w3_agileits_portfolio_grid">
					<a href="images/food 7 img 7.png" >
						<div class="view effect">
							<img src="images/food 7 img 7.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 7</h4>
							</div>
						</div> 
					</a>
				</div>
				<div class="w3_agileits_portfolio_grid">
					<a href="images/food 8 img 8.png" >
						<div class="view effect">
							<img src="images/food 8 img 8.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 8</h4>
							</div>
						</div> 
					</a>
				</div>
				<div class="w3_agileits_portfolio_grid">
					<a href="images/food 9 img 9.png" >
						<div class="view effect">
							<img src="images/food 9 img 9.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Food Court 9</h4>
							</div>
						</div> 
					</a>
				</div>
				<div class="w3_agileits_portfolio_grid">
					<a href="images/sales-feb.png" >
						<div class="view effect">
							<img src="images/sales-feb.png" alt=" " class="img-responsive" />
							<div class="mask"></div>
							<div class="content">
								<h4>Total Sales</h4>
							</div>
						</div> 
					</a>
				</div>
			</div>	
			
				
				
			</div>	
			<div class="clearfix"> </div>
		</div>
	
<!-- //portfolio -->
	<script type="text/javascript"  src="js/jquery.gallery.js" ></script>
	<script>
		$(function() {
			$('.w3_agile_portfolio_grids').createSimpleImgGallery();
		});
	</script>
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
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
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