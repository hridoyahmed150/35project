<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	
	//query to store data
	print $sql = "
	update school_online_registration
	set	
	student_id  ='$student_id',
	user_name = '$user_name',
	password = '$password'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:school_registration_info.php');


?>