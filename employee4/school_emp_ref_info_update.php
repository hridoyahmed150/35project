<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>
 
<?php
    //adding header
    include "employee_header.php";
	//get the input
	$ref_name = $_POST['ref_name'];
	$ref_designation = $_POST['ref_designation'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$job_responsibility = $_POST['job_responsibility'];
	$joining_date = $_POST['joining_date'];
	$reporting_authority = $_POST['reporting_authority'];
	
	//query to store data
	$sql = "
	update school_emp_ref_info 
	set	
	ref_name = '$ref_name',
	ref_designation ='$ref_designation',
	address ='$address',
	contact = '$contact',
	email = '$email',
	job_responsibility = '$job_responsibility',
	joining_date = '$joining_date',
	reporting_authority = '$reporting_authority'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_emp_ref_info.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>