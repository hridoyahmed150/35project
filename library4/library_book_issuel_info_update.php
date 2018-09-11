
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
	$sql = "
	update school_books_issue_management_system
	set	
	member_id = '$member_id',
	book_id ='$book_id',
	book_issue_date ='$book_issue_date',
	returning_date = '$returning_date'
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	$sql1 = "
	update school_lib_books_infor_entry_system 
	set	

	cstatus = 'Issue'
	where id =".$book_id;
	mysqli_query($con,$sql1);
	
	//redirect to view page
	header('location: library_book_issue_info.php');
?>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>