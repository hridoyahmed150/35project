<?php
    //adding header
    include "../header.php";
	//get the input
	$boook_name = $_POST['boook_name'];
	$publisher_name = $_POST['publisher_name'];
	$cdate = $_POST['cdate'];
	$author_name = $_POST['author_name'];
	$quantity = $_POST['quantity'];
	$id = $_POST['id'];
	
	//query to store data
	$sql = "
	update school_lib_books_infor_entry_system 
	set	
	boook_name = '$boook_name',
	publisher_name ='$publisher_name',
	cdate ='$cdate',
	author_name = '$author_name',
	quantity = '$quantity'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: library_book_info.php');


?>