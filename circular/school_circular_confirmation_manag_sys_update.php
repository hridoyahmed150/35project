<?php
    //adding header
    include "../header.php";
	//get the input
	$applicant_id = $_POST['applicant_id'];
	$confirmation_message = $_POST['confirmation_message'];
	$joining_date = $_POST['joining_date'];
	$id = $_POST['id'];
	
	
	//query to store data
	$sql = "
	update app_msg
	set
	app_id = $applicant_id,
	message = '$confirmation_message',
	msgdate = '$joining_date'
	where id=".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_circular_confirmation_manag_sys.php');


?>