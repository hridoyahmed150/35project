

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
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_lib_books_infor_entry_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Student Personal Information Detils</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:#CCC"><b>Boook Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['boook_name'];?></div>
    <div class="col-sm-3 col-md-3" style="background-color:#CCC"><b>Publisher Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['publisher_name'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color#CCC:"><b>Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['cdate'];?></div>
    <div class="col-sm-3 col-md-3" style="background-color:#CCC"><b>Author Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:#CCC"><?php print $row['author_name'];?></div>
  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Quantity:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['quantity'];?></div>
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>