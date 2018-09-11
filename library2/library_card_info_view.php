
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
	$sql = "select * from school_library_card where id=".$id;
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
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Member Id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['member_id'];?></div>
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Member Type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['member_type'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['name'];?></div>
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Contact:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['contact'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Card Validation Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['card_validation_date'];?></div>
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>