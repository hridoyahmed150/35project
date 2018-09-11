<?php
    //adding header
    include "../header.php";
	//get the input
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$subject = $_POST['subject'];
	$comments = $_POST['comments'];
	$cdate = $_POST['cdate'];
	$id = $_POST['id'];
	
	//query to store data
	print $sql = "
	update school_feedback
	set	
	email  ='$email',
	contact = '$contact',
	subject = '$subject',
	comments = '$comments',
	cdate = '$cdate'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:school_feedback_info.php');


?>