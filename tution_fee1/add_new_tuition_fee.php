<?php
	//connect to database
	include "../db/dbcon.php";
	//store inputs into variable
	$student_id = $_POST['student_id'];
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$fee_amount = $_POST['fee_amount'];
	$paid_status = $_POST['paid_status'];
	$comments = $_POST['comments'];

	//query to insert data into table
	$sql = "insert into school_tution_fee values('','$student_id','$date','$month',$year,'$fee_amount','$paid_status','$comments',1)";
	
	//execute the query
	mysqli_query($con,$sql);
?>