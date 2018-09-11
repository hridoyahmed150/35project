<?php
    //adding header
    include "../header.php";
	//get the input
	$leave_type = $_POST['leave_type'];
	$leave_start_date = $_POST['leave_start_date'];
	$leave_end_date = $_POST['leave_end_date'];
	$employee_id = $_POST['employee_id'];
	//query to store data
	$sql = "insert into school_leave_management_system values('',1,'$leave_type','$leave_start_date','$leave_end_date','$employee_id')";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: student_leave_info.php');


?>