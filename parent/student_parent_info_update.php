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
	print $sql = "
	update parents_management_system 
	set	
	student_id = '$student_id',
	profession ='$profession',
	office_location ='$office_location',
	monthly_income = '$monthly_income',
	contact = '$contact',
	email = '$email',
	national_id = '$national_id',
	passport = '$passport',
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: studen_parent_info.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>