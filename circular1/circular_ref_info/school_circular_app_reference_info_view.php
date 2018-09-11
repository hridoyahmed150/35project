<?php
	//get id
	 $id = $_GET['id'];
  //adding header
    include "../header.php";
	//sql query to information of this ID
	$sql = "select * from school_circular_applicant_reference_information where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Circular Reference Information</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['name'];?></div>
  </div>
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Designation:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['designation'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['address'];?></div>

  </div>  
<hr />
  <div class="row">
      <div class="col-sm-3 col-md-3" style="background-color:"><b>Contact:</b> </div>
      <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['contact'];?></div>
  </div>
  <hr/>  
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Email:</b> </div>
  <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['email'];?></div>

  </div> 
<hr />
 
