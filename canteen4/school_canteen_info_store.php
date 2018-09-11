<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$student_name = $_POST['student_name'];
	$duration = $_POST['duration'];
	$amount = $_POST['amount'];
	$cdate = $_POST['cdate'];
	$agreement = $_POST['agreement'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$email = $_POST['email'];

	//query to store data
	$sql = "insert into school_canteen values('','$student_name','$duration','$amount','$cdate','$agreement','$contact','$address','$email',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_canteen_info.php');


?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>
		 ( student_name  duration  amount  cdate  agreement  contact  address  email  )
