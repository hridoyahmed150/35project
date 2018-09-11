<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$std_id = $_POST['std_id'];
	$previous_school_name = $_POST['previous_school_name'];
	$reason_leaving_previous_school = $_POST['reason_leaving_previous_school'];
	$result_previous_school = $_POST['result_previous_school'];
	$first_enrolled_class = $_POST['first_enrolled_class'];
	$admission_date = $_POST['admission_date'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$pob = $_POST['pob'];
	$bgr = $_POST['bgr'];
	
	//query to store data
	$sql = "insert into school_std_education values('','$std_id','$previous_school_name','$reason_leaving_previous_school','$result_previous_school','$first_enrolled_class','$admission_date',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: studen_education_info.php');


?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>