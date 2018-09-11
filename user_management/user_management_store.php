<?php
    //adding header
    include "../header.php";
	//get the input
	$username = $_POST['username'];
	$password = $_POST['password'];
	$department = $_POST['department'];
	
	//query to store data
	$sql = "insert into school_user_info values('','$username','$password','$department',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: user_management_info.php');


?>