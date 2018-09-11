<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$receive_date = $_POST['receive_date'];
	$submission_date = $_POST['submission_date'];
	$equipment_id = $_POST['equipment_id'];
	
	//query to store data
	$sql = "insert into school_lab_euipment_distribution values('','$student_id','$receive_date', '$submission_date', '$equipment_id',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_lab_equipment_distribution.php');


?>