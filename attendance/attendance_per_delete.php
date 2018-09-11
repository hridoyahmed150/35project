<?php @session_start();
    if(isset($_SESSION['username']) && $_SESSION['department']=='attendance'){

 ?>
<?php
	//get id
	$id = $_GET['id'];

	//connect with database
	include "../db/dbcon.php";

	//query to delete data
	$sql = "delete from attendance_management_system where id=".$id;
	
	//execute the query
	$result = mysqli_query($con,$sql);
	
	//redirect to previous page
	header('Location:attendance_personal_info.php');	

?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>