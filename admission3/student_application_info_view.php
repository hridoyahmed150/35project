<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_application_form where id=".$id;
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
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student's Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Father's Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['father_name'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Mother's Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['mother_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Present Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['present_address'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Permanent Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['permanent_address'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Religion:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['religion'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Gender:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['gender'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Date of Birth:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['date_of_birth'];?></div>

  </div> 
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Place of Birth:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['place_of_birth'];?></div>
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Blood Group:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['blood_group'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Previous School Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['previous_school_name'];?></div>
    
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Reason of leaving Previous School:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['reason_of_leaving_previous_school'];?></div>
  </div> 
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Result of Previous School:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['result_of_previous_school'];?></div>
  </div> 
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>First Enrolled Class:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['first_enrolled_class'];?></div>
  </div> 
    <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Admission Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['admission_date'];?></div>
  </div>      
    <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Status:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['status'];?></div>
  </div>      
</div>