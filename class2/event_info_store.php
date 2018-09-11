<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$event_id = $_POST['event_id'];
	$topic = $_POST['topic'];
	$cstatus = $_POST['cstatus'];
	//query to store data
	print $sql = "insert into school_event_participant values('',$student_id,$event_id,'$topic','$cstatus',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:event_info.php');


?>