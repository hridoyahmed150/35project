<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from salary_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Employee Salary Information Detils</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Designation:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['designatio'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Basic Salary:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['basic_salary'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>House Rent:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['house_rent'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Treatment:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['treatment'];?></div>

 </div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Convince:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['convince'];?></div> 
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Provident Fund:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['provident_fund'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Bonus:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['bonus'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Month:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['month'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Year:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['year'];?></div>

  </div> 
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Employee ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['employee_id'];?>

  </div>      
</div>