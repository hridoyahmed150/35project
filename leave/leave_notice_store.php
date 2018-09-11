<?php
    //adding header
    include "../header.php";
	//get the input
	$type = $_POST['type'];
	$publish_date = $_POST['publish_date'];
	$expire_date = $_POST['expire_date'];
	$subject = $_POST['subject'];
	$description = $_POST['description'];
	
	//query to store data
	$sql = "insert into leave_notice_management_system values('','$type','$publish_date','$expire_date','$subject','$description',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: leave_notice_info.php');


?>