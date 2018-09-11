
<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$class = $_POST['class'];
	$subject = $_POST['subject'];
	$mark = $_POST['mark'];
	$grade = $_POST['grade'];
	$cdate = $_POST['cdate'];
	$exam_type = $_POST['exam_type'];

	
	//query to store data
	$sql = "insert into school_std_result values('',$student_id,'$class','$subject','$mark','$grade','$cdate','$exam_type',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: result_info.php');


?>
