
<?php 
  //add header
  include "../attendance_header.php";
?>
 

<?php
//get the input
	$stu_id = $_POST['stu_id'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	
	
	
	//query to store data
	print $sql = "
	update school_attendance_msg 
	set	
	stu_id ='$stu_id',
	type ='$type',
	description ='$description',
	date ='$date'
	

	where id =". $_POST['id'] ;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:msg_show.php');


?>