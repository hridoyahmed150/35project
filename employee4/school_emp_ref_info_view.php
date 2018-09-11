<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>

<?php
  //get id
  $id = $_GET['id'];
    //adding header
    include "employee_header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_emp_ref_info where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h3><b>Employee Personal Information Details</b></h3>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['ref_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Designation:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['ref_designation'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['address'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Contact:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['contact'];?></div>
  </div>    
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Email:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['email'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Job Responsibility:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['job_responsibility'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Joining Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['joining_date'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Reporting Authority:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['reporting_authority'];?></div>  
</div>
<hr />

</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>