<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$sname = $_POST['sname'];
	$duration = $_POST['duration'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];
	$agreement = $_POST['agreement'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$email = $_POST['email'];

	//query to store data
	$sql = "insert into school_canteen values('','$sname','$duration','$amount','$date','$agreement','$contact','$address','$email',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_canteen_info.php');


?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>