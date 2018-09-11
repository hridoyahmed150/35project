<?php
	//get id
	 $id = $_GET['id'];
  //adding header
    include "../header.php";
	//sql query to information of this ID
	$sql = "select * from school_lab_euipment_distribution where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Lab Equipment Distribution</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_id'];?></div>
  </div>
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Receive Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['receive_date'];?></div>

  </div>  
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Submission Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['submission_date'];?></div>

  </div>  
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Equipment ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['equipment_id'];?></div>

  </div>  
<hr />
 
