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
	$id = $_POST['id'];
	
	//query to store data
	print $sql = "
	update school_canteen 
	set	
	student_name = '$sname',
	duration ='$duration',
	amount ='$amount',
	date = '$date',
	agreement = '$agreement',
	contact = '$contact',
	address = '$address',
	email = '$email',
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