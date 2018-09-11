<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='class'){


    //adding header
    include "../header.php";
	//get the input
	$event_name = $_POST['event_name'];
	$date_of_event = $_POST['date_of_event'];
	$location = $_POST['location'];
	$time = $_POST['time'];
	$cstatus = $_POST['cstatus'];
	//query to store data
	$sql = "
	update school_event_info 
	set	
	event_name = '$event_name',
	date_of_event ='$date_of_event',
	location = '$location',
	time = '$time',
	cstatus = '$cstatus'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_event_info.php');
?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";
	
}
	?>

