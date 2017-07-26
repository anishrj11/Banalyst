<?php 
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<title>Upload Files</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
<a href="../home.php"><img id="image" src="images/arrow.png" height="40px" width="40px"></img></a>
	<div class="main">	
		<div class="w3layouts_main agileinfo w3">		
			<div class="w3_agile_upload_form agileits">
				<h1 class="w3_agileits w3ls">Analysis Request</h1>
				<h2 class="wthree">Provide details of Request</h2>
				<div class="agile_login_form">
					<form action="zip_script.php" method="POST" class="agileits_w3layouts_form" enctype="multipart/form-data">
						<input type="text" name="Cname" placeholder="Company Name" required="TRUE"/>
						<input type="email" name="Email" placeholder="Email Address" required="TRUE"/>
						<input type="number" name="Phone" placeholder="Contact Number" required="TRUE"/>
						<input type="file" name="zip_file" required="TRUE"/>
						<input type="submit" name="submit1" value="SUBMIT">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>