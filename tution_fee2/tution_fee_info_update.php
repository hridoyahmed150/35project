<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='tution_fee'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$id = $_POST['id'];
	$student_id = $_POST['student_id'];
	$paid_date = $_POST['paid_date'];
	$paid_month = $_POST['paid_month'];
	$paid_year = $_POST['paid_year'];
	$fee_paid = $_POST['fee_paid'];
	$paid_status = $_POST['paid_status'];
	$comments = $_POST['comments'];
	
	//query to store data
	print $sql = "
	update school_tution_fee 
	set	
	student_id = '$student_id',
	paid_date = '$paid_date',
	paid_month ='$paid_month',
	paid_year ='$paid_year',
	fee_paid = '$fee_paid',
	paid_status = '$paid_status',
	comments = '$comments'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: tution_mg_sys.php');


?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>
