<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_leave_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Student leave Information Details</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>cstatus</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['cstatus'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Type</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['leave_type'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Start Date</b> 
	</div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['leave_start_date'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:">
	<b>End Date</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['leave_end_date'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Employee ID</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['employee_id'];?></div>
  </div>   
<hr />
  
      
</div>