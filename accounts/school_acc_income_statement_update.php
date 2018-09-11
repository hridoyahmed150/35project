<?php 
@session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){

 ?>
 
<?php
    //adding header
    include "accounts_header.php";
	//get the input
	$date = $_POST['date'];
	$description = $_POST['description'];
	$debit_amount = $_POST['debit_amount'];
	$credit_amount = $_POST['credit_amount'];
	$total_balance = $_POST['total_balance'];
	$reference = $_POST['reference'];
	
	//query to store data
	$sql = "
	update school_acc_income_statement 
	set	
	date = '$date',
	description ='$description',
	debit_amount ='$debit_amount',
	credit_amount = '$credit_amount',
	total_balance = '$total_balance',
	reference = '$reference'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_acc_income_statement.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>