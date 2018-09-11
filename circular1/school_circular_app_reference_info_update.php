<?php
    //adding header
    include "../header.php";
	//get the input
	$name = $_POST['name'];
	$designation = $_POST['designation'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];	
	$id = $_POST['id'];
	
	//query to store data
	$sql = "
	update school_circular_applicant_reference_information 
	set	
	name = '$name',
	designation ='$designation',
	address = '$address',
	contact = '$contact',
	email = '$email'
	
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular_app_reference_info.php');


?>