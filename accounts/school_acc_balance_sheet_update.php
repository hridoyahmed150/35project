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
	$liabilities = $_POST['liabilities'];
	$assets = $_POST['assets'];
	$total_balance = $_POST['total_balance'];
	
	//query to store data
	$sql = "
	update school_acc_balance_sheet 
	set	
	date = '$date',
	description ='$description',
	liabilities ='$liabilities',
	assets = '$assets',
	total_balance = '$total_balance'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_acc_balance_sheet.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>