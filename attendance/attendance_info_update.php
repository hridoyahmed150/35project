<?php @session_start();
    if(isset($_SESSION['username']) && $_SESSION['department']=='attendance'){

 ?>

<?php
    //adding header
    include "../header.php";
	//get the input
	$type = $_POST['type'];
	$stu_id = $_POST['stu_id'];
	$emp_id = $_POST['emp_id'];
	
	$day = $_POST['day'];
	$sstatus = $_POST['sstatus'];
	$entry_time = $_POST['entry_time'];
	$exit_time = $_POST['exit_time'];
	$id = $_POST['id'];

	//query to store data
	

	$sql = "UPDATE attendance_management_system
	SET 
	type='$type', 
	stu_id='$stu_id',
	emp_id='$emp_id', 
	 
	day='$day', 
	sstatus='$sstatus',
	entry_time='$entry_time',
	exit_time='$exit_time'
	WHERE id=".$id;

	//execute query
	//mysqli_query($con,$sql);
	
	if (mysqli_query($con, $sql)) {
    	echo "Record updated successfully";
	} else {
    	echo "Error updating record: " . mysqli_error($con);
	}
	
	//redirect to view page
	  header('location: attendance_personal_info.php');


?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>
