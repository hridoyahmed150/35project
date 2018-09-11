<?php
    //adding header
    include "../header.php";
	//get the input
	$type = $_POST['type'];
	$member_id = $_POST['member_id'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	
	
	//query to store data
	$sql = "
	update school_membership_management_system
	set	
	type ='$type',
	member_id ='$member_id',
	user_name = '$user_name',
	password = '$password'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
  	header('location: member_info.php');


?>