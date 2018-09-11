<?php
	//connect to database
	include "../db/dbcon.php";
	//store inputs into variable
	$job_type = $_POST['job_type'];
	$edu_qul = $_POST['edu_qul'];
	$rq_exp = $_POST['rq_exp'];
	$job_salary = $_POST['job_salary'];
	$job_loc = $_POST['job_loc'];
	$job_time = $_POST['job_time'];

	//query to insert data into table
	$sql = "insert into school_circular values('','$job_type','$edu_qul','$rq_exp',$job_salary,'$job_loc','$job_time',1)";
	
	//execute the query
	mysqli_query($con,$sql);
?>