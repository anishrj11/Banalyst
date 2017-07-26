<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$message = $_POST['Message'];
		$message = mysqli_real_escape_string($con,$message);
		$message = strip_tags($message);
		
		
		$name = $_POST['Name'];
		$name = mysqli_real_escape_string($con,$name);
		$name = strip_tags($name);
		
		$email = $_POST['Email'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);
				
		$contact = $_POST['Contact'];
		$contact = mysqli_real_escape_string($con,$contact);
		$contact = strip_tags($contact);
		
		

		
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		$regex_num = "/^[789][0-9]{9}$/";

		if (!preg_match($regex_email, $email))
			{
			$m = "<span style='color: red;'>Not a valid Email Id</span>";
			header('Location: '.$_SERVER['PHP_SELF']);
			}
		else if (!preg_match($regex_num, $contact))
			{
			$m = "<span style='color: red;'>Not a valid phone number</span>";
			header('Location: '.$_SERVER['PHP_SELF']);
			}
		else{
			$query = "INSERT INTO contact
			(Message, Name, Email, Contact)
			VALUES
			('{$message}','{$name}','{$email}','{$contact}')";
			if(mysqli_query($con,$query)){
				if(isset($_SESSION['email']))
					header('location: home.php');	
				else
					header('location: index.php');
			}
			else{
				echo "error while inserting the records".mysqli_error($con);
			}
		}
	}
?>