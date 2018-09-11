<?php //@session_start();
	//if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
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
	print $sql = "
	update school_emp_info 
	set	
	name = '$name',
	father_name ='$father_name',
	mother_name ='$mother_name',
	present_address = '$present_address',
	permanent_address = '$permanent_address',
	religion = '$religion',
	nationality = '$nationality',
	national_id = '$national_id',
	gender = '$gender',
	marital_status = '$marital_status',
	blood_group = '$blood_group',
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_emp_info.php');


?>

<?php //} //else {
	//print "Please <a href='../login.php'>Login</a> to enter this page";	
//}
	?>