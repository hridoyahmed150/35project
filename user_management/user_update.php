<?php
    //adding header
    include "../header.php";
	//get the input
	$username = $_POST['username'];
	$password = $_POST['password'];
	$department = $_POST['department'];
	$id = $_POST['id'];
	
	
	//query to store data
	print $sql = "
	update school_user_info
	set	
	username   ='$username',
	password = '$password',
	department = '$department'
	
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: user_management_info.php');


?>