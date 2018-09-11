<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$profession = $_POST['profession'];
	$office_location = $_POST['office_location'];
	$monthly_income = $_POST['monthly_income'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$national_id = $_POST['national_id'];
	$passport = $_POST['passport'];
	
	//query to store data
	$sql = "insert into parents_management_system values('','$student_id','$profession','$office_location','$monthly_income','$contact','$email','$national_id','$passportb',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: studen_parent_info.php');


?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>