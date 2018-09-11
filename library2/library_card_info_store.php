

<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>

<?php
    //adding header
    include "../header.php";
	//get the input
	$member_id = $_POST['member_id'];
	$member_type = $_POST['member_type'];
	$address = $_POST['address'];
	$name = $_POST['name'];
	$image = $_POST['image'];
	$contact = $_POST['contact'];
	$card_validation_date = $_POST['card_validation_date'];
	//query to store data
	$sql = "insert into school_library_card values('','$member_id','$member_type','$address','$name','$image','$contact','$card_validation_date',1)";
	//execute query
	mysqli_query($con,$sql);
	//redirect to view page
	header('location: library_card_info.php');
?>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>