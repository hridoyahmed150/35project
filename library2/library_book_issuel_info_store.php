
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
	$book_id = $_POST['book_id'];
	$book_issue_date = $_POST['book_issue_date'];
	$returning_date = $_POST['returning_date'];
	
	//query to store data
	$sql = "insert into school_books_issue_management_system values('','$member_id','$book_id','$book_issue_date','$returning_date',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: library_book_issue_info.php');
?>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>