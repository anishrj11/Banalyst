<!-- pop-up-box -->
	<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3 class="agileinfo_sign">Sign In</h3>	
		<div class="agileits_signin_form">
			<form action="logincode.php" method="post">
				<input type="email" name="email" placeholder="Your Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<div class="agile_remember">
					<div class="agile_remember_left">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>remember me</label>
						</div>
					</div>
					<div class="agile_remember_right">
						<a href="#">Forgot Password?</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<input type="submit" name="submit" value="SIGN IN">
				<p>Don't have an account <a href="#small-dialog1" class="play-icon popup-with-zoom-anim">Sign Up</a></p>
				<div class="w3agile_social_icons">
					<ul>
						<li class="wthree_follow">Follow us on :</li>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>	
				</div>
			</form>
		</div>
	</div>
	<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3 class="agileinfo_sign">Sign Up</h3>	
		<div class="agileits_signin_form">
			<form action="signupcode.php" method="post">
				<input type="text" name="name" placeholder="First Name" required="TRUE">
				<input type="number" name="contact" placeholder="Contact" required="TRUE">
				<input type="email" name="email" placeholder="Your Email" required="TRUE">
				<input type="password" name="password" placeholder="Password" required="TRUE">
				<input type="password" name="confirm_password" placeholder="Confirm Password" required="TRUE">
				<input type="submit" name="submit" value="SIGN UP">
				<p>Already a member <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a></p>
				<div class="w3agile_social_icons">
					<ul>
						<li class="wthree_follow">Follow us on :</li>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>	
				</div>
			</form>
		</div>
	</div>
<!-- //pop-up-box -->	
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
																	
	});
</script>
