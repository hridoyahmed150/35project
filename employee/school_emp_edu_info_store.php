<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){

 ?>
<?php
    //adding header
    include "employee_header.php";
	//get the input
	$emp_id = $_POST['emp_id'];
	$exam_type = $_POST['exam_type'];
	$passing_year = $_POST['passing_year'];
	$board_or_university = $_POST['board_or_university'];
	$result = $_POST['result'];
	
	//query to store data
	$sql = "insert into school_emp_edu_info values('',$emp_id,'$exam_type','$passing_year','$board_or_university','$result',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_emp_edu_info.php');


?>

<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?> 