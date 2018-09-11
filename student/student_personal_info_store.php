<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$paddress = $_POST['paddress'];
	$praddress = $_POST['praddress'];
	$religion = $_POST['religion'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$pob = $_POST['pob'];
	$bgr = $_POST['bgr'];
	
	//query to store data
	$sql = "insert into school_std_pinfo values('','$name','$fname','$mname','$paddress','$praddress','$religion','$gender','$dob','$pob','$bgr',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: studen_personal_info.php');


?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>