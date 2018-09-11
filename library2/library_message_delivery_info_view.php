
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
	$sql = "select * from school_message_delivery_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Library Management System</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Member Id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['member_id'];?></div>
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Message:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['message'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['address'];?></div>
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['cdate'];?></div>
  </div>
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Reason:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['reason'];?></div>
  </div>  
</div>
<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>