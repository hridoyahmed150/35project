
<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>

<?php
	//get the input
	$name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$type = $_POST['type'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	
	//query to store data
	$sql = "insert into school_libr_registration_management_system values('','$name','$user_name','$email','$contact','$type','$password','$address',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: library_registration_info.php');
?>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>