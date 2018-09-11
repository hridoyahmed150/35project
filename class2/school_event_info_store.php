<?php
    //adding header
    include "../header.php";
	//get the input
	$event_name = $_POST['event_name'];
	$date_of_event = $_POST['date_of_event'];
	$location = $_POST['location'];
	$time = $_POST['time'];
	$cstatus = $_POST['cstatus'];
	//query to store data
	print $sql = "insert into school_event_info values('','$event_name','$date_of_event','$location','$time','$cstatus')";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:school_event_info.php');


?>