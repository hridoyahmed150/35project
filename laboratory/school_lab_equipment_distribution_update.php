<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$receive_date = $_POST['receive_date'];
	$submission_date = $_POST['submission_date'];
	$equipment_id = $_POST['equipment_id'];
	
	$id = $_POST['id'];
	
	//query to store data
	$sql = "
	update school_lab_euipment_distribution 
	set	
	student_id = $student_id,
	receive_date ='$receive_date',
	submission_date ='$submission_date',
	equipment_id = $equipment_id
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('Location: school_lab_equipment_distribution.php');	


?>