<?php
    //adding header
    include "../header.php";
	//get the input
	$applicant_id = $_POST['applicant_id'];
	$interview_time = $_POST['interview_time'];
	$interview_location = $_POST['interview_location'];
	$message_applicant = $_POST['message_applicant'];
	
	$id = $_POST['id'];
	
	//query to store data
	$sql = "
	update school_circular_candidate_selection_system 
	set	
	applicant_id = '$applicant_id',
	interview_time ='$interview_time',
	interview_location = '$interview_location',
	message_applicant = '$message_applicant'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular_cand_selection_sys.php');


?>