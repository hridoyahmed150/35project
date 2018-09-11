<?php
	//get id
	$id = $_GET['id'];
	
	//connect with database
	include "../db/dbcon.php";

	//query to delete data
	$sql = "delete from school_event_info where id=".$id;
	
	//execute the query
	$result = mysqli_query($con,$sql);
	
	//redirect to previous page
	header('Location:school_event_info.php');	

?>