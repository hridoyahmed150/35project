
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
	$sql = "
	update school_std_result 
	set	
	student_id = '$student_id',
	class ='$class',
	subject ='$subject',
	mark = '$mark',
	grade = '$grade',
	cdate = '$cdate',
	exam_type = '$exam_type'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: result_info.php');

?>
