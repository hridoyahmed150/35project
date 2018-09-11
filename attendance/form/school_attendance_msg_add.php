<?php
	//connect to database
	include "../../db/dbcon.php";
	//store inputs into variable
	
	 $stuid = $_POST['stuid'];
	 $type = $_POST['type'];
	 $descrip = $_POST['description'];
	 $date = $_POST['date'];
	 $date = $_POST['date'];

	$sql = "INSERT INTO school_attendance_msg VALUES ('', '$stuid', '$type', '$descrip', '$date',1)";
	
	//execute the query
	mysqli_query($con,$sql);

	//redirect to view page
	header('location: msg_show.php');	
?>