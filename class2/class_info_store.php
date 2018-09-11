<?php
    //adding header
    include "../header.php";
	//get the input
	$class_name = $_POST['cname'];
	$section = $_POST['section'];
	$shift = $_POST['shift'];
	$subject = $_POST['subject'];
	$class_day = $_POST['classday'];
	$class_time = $_POST['ctime'];
	$class_location = $_POST['location'];
	$class_teacher_id = $_POST['teacherid'];
	
	//query to store data
	$sql = "insert into school_class_time values('','$class_name',0,'$section','$shift','$subject','$class_day','$class_time','$class_location','$class_teacher_id',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:school_time_info.php');


?>