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
	$id = $_POST['id'];
	
	//query to store data
	print $sql = "
	update school_std_pinfo 
	set	
	name = '$name',
	father_name ='$fname',
	mother_name ='$mname',
	present_address = '$paddress',
	permanent_address = '$praddress',
	religion = '$religion',
	gender = '$gender',
	date_of_birth = '$dob',
	place_of_birth = '$pob',
	blood_group = '$bgr'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: studen_personal_info.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>