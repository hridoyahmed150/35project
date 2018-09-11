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
	$sql = "insert into school_emp_ref_info values('','$ref_name','$ref_designation','$address','$contact','$email','$job_responsibility','$joining_date','$reporting_authority',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_emp_ref_info.php');


?>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?> 