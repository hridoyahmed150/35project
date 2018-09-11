<?php
    //adding header
    include "../header.php";
	//get the input
	$company_name = $_POST['company_name'];
	$designation = $_POST['designation'];
	$year = $_POST['year'];
	$salary = $_POST['salary'];
	
	$id = $_POST['id'];
	
	//query to store data
	$sql = "
	update school_circular_applicant_experience_information 
	set	
	company_name = '$company_name',
	designation ='$designation',
	year = '$year',
	salary = '$salary'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular_app_exp_info.php');


?>