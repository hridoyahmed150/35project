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
	$id = $_POST['id'];
	
	
	//query to store data
	$sql = "
	update school_circular
	set
	job_type = '$job_type',
	educational_qualification = '$educational_qualification',
	required_experience = '$required_experience',
	job_salary = '$job_salary',
	job_location = '$job_location', 		 
     job_time = '$job_time'
	where id=".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular.php');


?>