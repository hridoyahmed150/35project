
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
	$image = $_POST['image'];
	$contact = $_POST['contact'];
	$type = $_POST['type'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	//query to store data
	print $sql = "
	update school_libr_registration_management_system
	set	
	name = '$name',
	user_name ='$user_name',
	image ='$image',
	contact = '$contact',
	type = '$type',
	password = '$password',
	address = '$address'
	
	where id =".$_POST['id'];
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