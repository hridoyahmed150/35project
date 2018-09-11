
<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>
<?php
	//get id
	$id = $_GET['id'];
	//sql query to information of this ID
	$sql = "select * from school_books_issue_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Library Book Issue Management System</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Member Id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['member_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Book Id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['book_id'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Book Issue Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['book_issue_date'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Returning Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['returning_date'];?></div>
  </div>  
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>