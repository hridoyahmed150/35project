<?php
    //adding header
    include "../header.php";
	//get the input
	$student_id = $_POST['student_id'];
	$event_id = $_POST['event_id'];
	$topic = $_POST['topic'];
	
	//query to store data
	$sql = "insert into school_event_participant values('',$student_id,$event_id,'$topic','Interested',1)";
	//execute query
	mysqli_query($con,$sql);
?>
<script>
alert("Application Submitted");
window.location='event.php';
</script>
