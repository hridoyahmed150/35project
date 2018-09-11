<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='class'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$event_id = $_POST['event_id'];
	$topic = $_POST['topic'];
	$cstatus = $_POST['cstatus'];
	//query to store data
	$sql = "
	update school_event_participant 
	set	
	student_id = '$student_id',
	event_id ='$event_id',
	topic = '$topic',
	cstatus = '$cstatus'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: event_info.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>