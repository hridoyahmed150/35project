
<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>

<?php
	//get the input
	$member_id = $_POST['member_id'];
	$message = $_POST['message'];
	$address = $_POST['address'];
	$cdate = $_POST['cdate'];
	$reason = $_POST['reason'];
	//query to store data
	$sql = "
	update school_message_delivery_management_system
	set	
	member_id = '$member_id',
	message ='$message',
	address ='$address',
	cdate ='$cdate',
	reason = '$reason'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	//redirect to view page
	header('location: library_message_delivery_info.php');

?>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>