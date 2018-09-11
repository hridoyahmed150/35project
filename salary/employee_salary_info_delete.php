
<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='salary'){
 ?>
<?php include "employee_header.php"; 
  //include "print.php"; 

?>



<?php
	//get id
	$id = $_GET['id'];
	
	//connect with database
	include "../db/dbcon.php";

	//query to delete data
	$sql = "delete from salary_management_system where id=".$id;
	
	//execute the query
	$result = mysqli_query($con,$sql);
	
	//redirect to previous page
	header('Location:employee_salary_info.php');	

?>