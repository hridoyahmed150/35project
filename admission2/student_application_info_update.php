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
	$reason_of_leaving_previous_school = $_POST['reason_of_leaving_previous_school'];
	$result_of_previous_school = $_POST['result_of_previous_school'];
	$first_enrolled_class = $_POST['first_enrolled_class'];
	$admission_date = $_POST['admission_date'];
	$status = $_POST['status'];
	
	//query to store data
	print $sql = "
	update school_application_form 
	set	
	student_name = '$student_name',
	father_name ='$father_name',
	mother_name ='$mother_name',
	present_address = '$present_address',
	permanent_address = '$permanent_address',
	religion = '$religion',
	gender = '$gender',
	date_of_birth = '$date_of_birth',
	place_of_birth = '$place_of_birth',
	previous_school_name = '$previous_school_name',
	reason_of_leaving_previous_school = '$reason_of_leaving_previous_school',
	result_of_previous_school = '$result_of_previous_school',
	first_enrolled_class = '$first_enrolled_class',
	admission_date = '$admission_date',
	status = '$status'

	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: student_application_info.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>