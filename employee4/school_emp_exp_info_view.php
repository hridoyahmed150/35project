<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>

<?php
  //get id
  $id = $_GET['id'];
    //adding header
    include "employee_header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_emp_exp_info where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h3><center><b>Employee Experience Information Details</b></center></h3>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Company Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['company_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Designation:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['designation'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Year:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['year'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Salary:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['salary'];?></div>
  </div>    
<hr />
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>