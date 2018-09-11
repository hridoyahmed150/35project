<?php
    //adding header
    include "../header.php";
	//get the input
	$event_name = $_POST['event_name'];
	$topic = $_POST['topic'];
	
	$date_of_event = $_POST['date_of_event'];
	$location = $_POST['location'];
	$time = $_POST['time'];
	//query to store data
	print $sql = "insert into school_event_info values('','$event_name','$topic','$date_of_event','$location','$time','not')";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:school_event_info.php');


?>