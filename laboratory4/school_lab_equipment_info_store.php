<?php
    //adding header
    include "../header.php";
	//get the input
	$lab_type = $_POST['lab_type'];
	$equipment_name = $_POST['equipment_name'];
	
	//query to store data
	$sql = "insert into school_lab_equipment_information values('','$lab_type','$equipment_name',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('Location: school_lab_equipment_info.php');	


?>