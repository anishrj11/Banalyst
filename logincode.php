<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT Email, Password FROM identity WHERE Email='{$email}' and Password='{$password}'";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);
		if ($num == 0) // that is if no records found in database
		{
			echo "No records found";
			header('location: home.php');
		}
		else{
			$row = mysqli_fetch_array($result);
			session_start();
			$_SESSION['email']=$row['Email'];
			header('location: home.php');	
		}
	}
?>