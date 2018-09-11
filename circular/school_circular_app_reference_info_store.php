<?php
    //adding header
    include "../header.php";
	//get the input
	$name = $_POST['name'];
	$designation = $_POST['designation'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	//query to store data
	$sql = "insert into school_circular_applicant_reference_information values('','$name','$designation', '$address', '$contact','$email',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular_app_reference_info.php');


?>