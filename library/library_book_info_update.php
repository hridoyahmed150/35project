
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
	$book_name = $_POST['book_name'];
	$publisher_name = $_POST['publisher_name'];
	$cdate = $_POST['cdate'];
	$author_name = $_POST['author_name'];
	$quantity = $_POST['quantity'];
	$cstatus = $_POST['cstatus'];
	
	$id = $_POST['id'];
	
	//query to store data
	$sql = "
	update school_lib_books_infor_entry_system 
	set	
	book_name = '$book_name',
	publisher_name ='$publisher_name',
	cdate ='$cdate',
	author_name = '$author_name',
	quantity = '$quantity',
	cstatus = '$cstatus'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: library_book_info.php');
?>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>