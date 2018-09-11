<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$student_name = $_POST['student_name'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$present_address = $_POST['present_address'];
	$permanent_address = $_POST['permanent_address'];
	$religion = $_POST['religion'];
	$gender = $_POST['gender'];
	$date_of_birth = $_POST['date_of_birth'];
	$place_of_birth = $_POST['place_of_birth'];
	$previous_school_name = $_POST['previous_school_name'];
	$blood_group = $_POST['blood_group'];
	
	$reason_of_leaving_previous_school = $_POST['reason_of_leaving_previous_school'];
	$result_of_previous_school = $_POST['result_of_previous_school'];
	$first_enrolled_class = $_POST['first_enrolled_class'];
	$admission_date = $_POST['admission_date'];
	
	//query to store data
	$sql = "insert into school_application_form values('','$student_name','$father_name','$mother_name','$present_address','$permanent_address','$religion','$gender','$date_of_birth','$place_of_birth','$blood_group','$previous_school_name','$reason_of_leaving_previous_school','$result_of_previous_school','$first_enrolled_class','$admission_date',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: student_application_info.php');


?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>