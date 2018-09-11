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
	$reference = $_POST['reference'];
	
	//query to store data
	$sql = "
	update school_acc_ledger 
	set	
	date = '$date',
	description ='$description',
	debit_amount ='$debit_amount',
	credit_amount = '$credit_amount',
	reference = '$reference'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_acc_ledger.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>