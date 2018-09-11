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
	$id = $_POST['id'];
	
	//query to store data
	print $sql = "
	update school_canteen 
	set	
	student_name = '$student_name',
	duration ='$duration',
	amount ='$amount',
	cdate = '$cdate',
	agreement = '$agreement',
	contact = '$contact',
	address = '$address',
	email = '$email'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_canteen_info.php');

?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>