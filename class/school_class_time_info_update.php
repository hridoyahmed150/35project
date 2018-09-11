<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='class'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$class_name = $_POST['cname'];
	$no_of_student  = 0;
	$section = $_POST['section'];
	$shift = $_POST['shift'];
	$subject = $_POST['subject'];
	$class_day = $_POST['classday'];
	$class_time = $_POST['ctime'];
	$class_location = $_POST['location'];
	$class_teacher_id = $_POST['teacherid'];
	
	//query to store data
	$sql = "
	update school_class_time 
	set	
	class_name = '$class_name',
	no_of_student =0,
	section ='$section',
	shift = '$shift',
	subject = '$subject',
	class_day = '$class_day',
	class_time = '$class_time',
	class_location = '$class_location',
	class_teacher_id = $class_teacher_id
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_time_info.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>