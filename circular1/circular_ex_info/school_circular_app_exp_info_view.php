<?php
	//get id
	 $id = $_GET['id'];
  //adding header
    include "../header.php";
	//sql query to information of this ID
	$sql = "select * from school_circular_applicant_experience_information where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Circular Experience Information</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Company Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['company_name'];?></div>
  </div>
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Designation:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['designation'];?></div>

  </div>  
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Year:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['year'];?></div>

  </div>  
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Salary:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['salary'];?></div>

  </div>  
<hr />
 
