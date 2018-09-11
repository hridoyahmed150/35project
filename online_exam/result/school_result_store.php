<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$question_id  = $_POST['question_id'];
	$answer_code = $_POST['answer_code'];
	$date = $_POST['date'];
		
	//query to store data
	$sql = "insert into online _exam_result values('','$student_id','$question_id','$answer_code','$date',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:school_result_info.php');


?>