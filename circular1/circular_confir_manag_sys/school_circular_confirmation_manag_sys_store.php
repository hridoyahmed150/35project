<?php
    //adding header
    include "../header.php";
	//get the input
	$applicant_id = $_POST['applicant_id'];
	$confirmation_message = $_POST['confirmation_message'];
	$joining_date = $_POST['joining_date'];
	//query to store data
	$sql = "insert into  school_circular_confirmation_management_system values('','$applicant_id','$confirmation_message', '$joining_date',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular_confirmation_manag_sys.php');


?>