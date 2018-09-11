<?php
    //adding header
    include "../header.php";
	//get the input
	//get the input
	$leave_type = $_POST['leave_type'];
	$leave_start_date = $_POST['leave_start_date'];
	$leave_end_date = $_POST['leave_end_date'];
	$employee_id = $_POST['employee_id'];
	
	
	//query to store data
	$sql = "
	update school_leave_management_system 
	set	
	leave_type ='$leave_type',
	leave_start_date ='$leave_start_date',
	leave_end_date = '$leave_end_date',
	employee_id = '$employee_id'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: student_leave_info.php');


?>