<?php
	//get id
	$id = $_GET['id'];
	
	//connect with database
	include "../db/dbcon.php";

	//query to delete data
	$sql = "delete from school_circular_candidate_selection_system where id=".$id;
	
	//execute the query
	$result = mysqli_query($con,$sql);
	
	//redirect to previous page
	header('Location: school_circular_cand_selection_sys.php');	

?>