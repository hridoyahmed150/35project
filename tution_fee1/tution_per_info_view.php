<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_tution_fee where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row=mysqli_fetch_array($result);
	
	
?>
<div class="container">
<hr />
<h1>Student Tution Fees Information Detils</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b> Student ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Paid Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['paid_date'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Paid Month:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['paid_month'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Paid Year:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['paid_year'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>fee_paid:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['fee_paid'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Paid Status:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['paid_status'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Comments:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['comments'];?></div>

  </div>      
</div>