<?php
require("../connection.php");

if(isset($_POST['submit1'])){
		$cname = $_POST['Cname'];
		$cname = mysqli_real_escape_string($con,$cname);
		$cname = strip_tags($cname);
		
		$email = $_POST['Email'];
		$email = mysqli_real_escape_string($con,$email);
		
		$contact = $_POST['Phone'];
		$contact = mysqli_real_escape_string($con,$contact);
		
		$filename = $_FILES["zip_file"]["name"];
		$source = $_FILES["zip_file"]["tmp_name"];
		$type = $_FILES["zip_file"]["type"];

		$name = explode(".", $filename);
		$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
		foreach($accepted_types as $mime_type) {
			if($mime_type == $type) {
				$okay = true;
				break;
			} 
		}

		$continue = strtolower($name[1]) == 'zip' ? true : false;
		if(!$continue) {
			$message = "The file uploading is not a .zip file.";
		}

		$target_path = "uploads/".$filename;
		move_uploaded_file($source, $target_path);
		
		
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		$regex_num = "/^[789][0-9]{9}$/";

		if (!preg_match($regex_email, $email))
			{
			$m = "<span style='color: red;'>Not a valid Email Id</span>";
			header('location: upload_file.php?m1='.$m);
			}
		else if (!preg_match($regex_num, $contact))
			{
			$m = "<span style='color: red;'>Not a valid phone number</span>";
			header('location: upload_file.php?m2='.$m);
			}
    	else{
			$query = "INSERT INTO upload
			(Cname, Email, Contact, Filename)
			VALUES
			('$cname','$contact','$email','$filename')";
			if(mysqli_query($con, $query)){
				echo 'file uploaded';
				header('location: ../finalsolution.php');
			}
			else{
				echo "error while inserting the records".mysqli_error($con);
			}
		}
}
?>