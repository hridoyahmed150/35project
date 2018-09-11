
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
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$card_validation_date = $_POST['card_validation_date'];
	//$id = $_POST['id'];
	//query to store data
	 $sql = "
	update school_library_card
	set	
	member_id = '$member_id',
	member_type ='$member_type',
	name = '$name',
	contact = '$contact',
	card_validation_date ='$card_validation_date'
	where id =".$_POST['id'];
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