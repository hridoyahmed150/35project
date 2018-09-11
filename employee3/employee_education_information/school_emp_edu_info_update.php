<?php //@session_start();
	//if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$exam_type = $_POST['exam_type'];
	$passing_year = $_POST['passing_year'];
	$board_or_university = $_POST['board_or_university'];
	$result = $_POST['result'];
	
	//query to store data
	print $sql = "
	update school_emp_edu_info 
	set	
	exam_type = '$exam_type',
	passing_year ='$passing_year',
	board_or_university ='$board_or_university',
	result = '$result',
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_emp_edu_info.php');


?>

<?php //} //else {
	//print "Please <a href='../login.php'>Login</a> to enter this page";	
//}
	?>