<?php
    //adding header
    include "../header.php";
	//get the input
	$company_name = $_POST['company_name'];
	$designation = $_POST['designation'];
	$year = $_POST['year'];
	$salary = $_POST['salary'];
	
	//query to store data
	$sql = "insert into school_circular_applicant_experience_information values('','$company_name','$designation', '$year', '$salary',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular_app_exp_info.php');


?>