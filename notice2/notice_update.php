<?php
    //adding header
    include "../header.php";
	//get the input
	$type = $_POST['type'];
	$publish_date = $_POST['publish_date'];
	$expire_date = $_POST['expire_date'];
	$subject = $_POST['subject'];
	$description = $_POST['description'];
	$id = $_POST['id'];
	
	//query to store data
	print $sql = "
	update school_notice
	set	
	type   ='$type',
	publish_date = '$publish_date',
	expire_date = '$expire_date',
	subject = '$subject',
	description = '$description'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_notice_info.php');


?>