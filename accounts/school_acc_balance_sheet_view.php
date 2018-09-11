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
	$sql = "select * from school_acc_balance_sheet where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h3><b>Current Assets and Liabilities Details</b></h3>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['date'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Description:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['description'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Liabilities:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['liabilities'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Current Assets:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['assets'];?></div>
  </div>    
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Total Balance:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['total_balance'];?></div>
  </div>   
<hr />
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>