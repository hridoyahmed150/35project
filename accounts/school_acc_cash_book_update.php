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
	$amount = $_POST['amount'];
	$type = $_POST['type'];
	$reference = $_POST['reference'];
	
	//query to store data
	$sql = "
	update school_acc_cash_book
	set	
	date = '$date',
	description ='$description',
	amount ='$amount',
	type = '$type',
	reference = '$reference'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_acc_cash_book.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>