<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='tution_fee'){

 ?>
<?php
	//connect to database

	include "../db/dbcon.php";
	include "../header.php";
	//store inputs into variable
	$student_id = $_POST['student_id'];
	$paid_date = $_POST['paid_date'];
	$paid_month = $_POST['paid_month'];
	$paid_year = $_POST['paid_year'];
	$fee_paid = $_POST['fee_paid'];
	$paid_status = $_POST['paid_status'];
	$comments = $_POST['comments'];

	//query to insert data into table
	$sql = "insert into school_tution_fee values('','$student_id','$paid_date','$paid_month',$paid_year,'$fee_paid','$paid_status','$comments',1)";
	
	//execute the query
	mysqli_query($con,$sql);
	//redirect to view page
	header('location: tution_mg_sys.php');	
?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>