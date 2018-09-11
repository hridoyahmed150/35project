<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){

 ?>
<?php
    //adding header
    include "employee_header.php";
	//get the input
	$name = $_POST['name'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$present_address = $_POST['present_address'];
	$permanent_address = $_POST['permanent_address'];
	$religion = $_POST['religion'];
	$nationality = $_POST['nationality'];
	$national_id = $_POST['national_id'];
	$gender = $_POST['gender'];
	$marital_status = $_POST['marital_status'];
	$blood_group = $_POST['blood_group'];
	
	//query to store data
	$sql = "insert into school_emp_info values('','$name','$father_name','$mother_name','$present_address','$permanent_address','$religion','$nationality','$national_id','$gender','$marital_status','$blood_group',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_emp_info.php');


?>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?> 