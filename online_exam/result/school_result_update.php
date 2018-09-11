<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$question_id = $_POST['question_id'];
	$answer_code = $_POST['answer_code'];
	$date = $_POST['date'];
	$id = $_POST['id'];
	
	//query to store data
	print $sql = "
	update school_online_registration
	set	
	student_id  ='$student_id',
	question_id = '$question_id',
	answer_code = '$answer_code',
	date = '$date'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:school_result_info.php');


?>