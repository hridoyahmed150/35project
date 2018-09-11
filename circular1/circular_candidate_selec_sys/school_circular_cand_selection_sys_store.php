<?php
    //adding header
    include "../header.php";
	//get the input
	$applicant_id = $_POST['applicant_id'];
	$interview_time = $_POST['interview_time'];
	$interview_location = $_POST['interview_location'];
	$message_applicant = $_POST['message_applicant'];
	//query to store data
	$sql = "insert into school_circular_candidate_selection_system values('','$applicant_id','$interview_location', '$message_applicant',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular_cand_selection_sys.php');


?>