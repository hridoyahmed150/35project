<?php
    //adding header
    include "../header.php";
	//get the input
	$job_type = $_POST['job_type'];
	$educational_qualification = $_POST['educational_qualification'];
	$required_experience = $_POST['required_experience'];
	$job_salary = $_POST['job_salary'];
	$job_location = $_POST['job_location'];
	$job_time = $_POST['job_time'];
	//query to store data
	$sql = "insert into  school_circular values('','$job_type',
	'$educational_qualification', '$required_experience', '$job_salary', '$job_location',
	'$job_time', 1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular.php');


?>