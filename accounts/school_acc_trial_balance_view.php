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
	$sql = "select * from school_acc_trial_balance where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h3><center><b>Revenue and Expenses Details</b></center></h3>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Serial No:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['serial_no'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Description:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['description'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Debit Amount:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['debit_amount'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Credit Amount:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['credit_amount'];?></div>
  </div>    
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Total Balance:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['total_balance'];?></div>

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