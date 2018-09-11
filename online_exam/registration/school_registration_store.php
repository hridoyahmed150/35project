<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$user_name  = $_POST['user_name'];
	$password = $_POST['password'];
		
	//query to store data
	$sql = "insert into school_online_registration values('','$student_id','$user_name','$password',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_registration_info.php');


?>