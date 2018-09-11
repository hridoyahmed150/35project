
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
	
	$cdate = $_POST['cdate'];
	
	
	//query to store data
	$sql = "insert into school_message_delivery_management_system values('','$member_id','$message','$cdate',1)";
	//execute query
	mysqli_query($con,$sql);
?>
<script>
alert("Your Message Has Been Send");
window.location = 'library_book_issue_info.php';
</script>
<?php	
	//redirect to view page
	
?>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>