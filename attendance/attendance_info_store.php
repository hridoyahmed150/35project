
<?php
    //adding header
    include "../header.php";
	//get the input
	$type = $_POST['type'];
	$stu_id = $_POST['stu_id'];
	$emp_id = $_POST['emp_id'];
	
	$day = $_POST['day'];
	$sstatus = $_POST['sstatus'];
	$entry_time = $_POST['entry_time'];
	$exit_time = $_POST['exit_time'];
	
	//query to store data
	$sql = "insert into attendance_management_system values('','$type','$stu_id','$emp_id','$day','$sstatus','$entry_time','$exit_time',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: attendance_personal_info.php');


?>
