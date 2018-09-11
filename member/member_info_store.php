<?php
    //adding header
    include "../header.php";
	//get the input
	$type = $_POST['type'];
	$member_id = $_POST['member_id'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	//query to store data
	$sql = "insert into school_membership_management_system values('','$type','$member_id','$user_name','$password',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: member_info.php');


?>