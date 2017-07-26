<?php
	require_once("connection.php");
	$sql = "CREATE TABLE identity 
	(CID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	Name CHAR(50) NOT NULL,
	Email CHAR(50) NOT NULL UNIQUE,
	Contact CHAR(50) NOT NULL,
	Password CHAR(50) NOT NULL)";
	$row=mysqli_query($con,$sql);
	if($row){
		echo "table persons created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($con);
	}
	
	$sql1 = "CREATE TABLE upload 
	(FID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	Cname CHAR(50) NOT NULL,
	Email CHAR(50) NOT NULL UNIQUE,
	Contact CHAR(50) NOT NULL,
	Filename CHAR(50) NOT NULL,
	Date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
	$row1=mysqli_query($con,$sql1);
	if($row1){
		echo "table upload created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($con);
	}
	$sql2 = "CREATE TABLE contact 
	(QID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Message  VARCHAR(100),
	Name CHAR(50) NOT NULL,
	Email CHAR(50) NOT NULL UNIQUE,
	Contact CHAR(50) NOT NULL)";
	$row2=mysqli_query($con,$sql2);
	if($row2){
		echo "table contact created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($con);
	}

?>