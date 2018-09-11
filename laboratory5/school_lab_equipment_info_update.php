<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='laboratory'){

 ?>
 
<?php
    //adding header
    include "laboratory_header.php";
	//get the input
	$lab_type = $_POST['lab_type'];
	$equipment_name = $_POST['equipment_name'];
	
	$id = $_POST['id'];
	
	//query to store data
	$sql = "
	update school_lab_equipment_information 
	set	
	lab_type = '$lab_type',
	equipment_name ='$equipment_name'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_lab_equipment_info.php');


?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>