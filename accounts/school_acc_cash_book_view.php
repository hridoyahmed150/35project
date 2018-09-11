<?php 
@session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){

 ?>

 <?php
  //get id
  $id = $_GET['id'];
    //adding header
    include "accounts_header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_acc_cash_book where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h3><center><b>Accounts Cash Book Details</b></center></h3>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['date'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Description:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['description'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Amount:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['amount'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['type'];?></div>
  </div>    
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Reference:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['reference'];?></div>
  </div>   
<hr />
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>