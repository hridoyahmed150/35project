<?php
	//get id
	 $id = $_GET['id'];
  //adding header
    include "../header.php";
	//sql query to information of this ID
	$sql = "select * from school_lab_equipment_information where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Lab Equipment Information</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Lab Type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['lab_type'];?></div>
  </div>
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Equipment Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['equipment_name'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Status:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['status'];?></div>

  </div>  
