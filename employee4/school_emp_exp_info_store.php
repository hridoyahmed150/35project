<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>

<?php
    //adding header
    include "employee_header.php";
	//get the input
	$company_name = $_POST['company_name'];
	$designation = $_POST['designation'];
	$year = $_POST['year'];
	$salary = $_POST['salary'];
	
	//query to store data
	$sql = "insert into school_emp_exp_info values('','$company_name','$designation','$year','$salary',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_emp_exp_info.php');
?>

<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?> 