<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from parents_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Student Parent Information Detils</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Profession:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['profession'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Office Location:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['office_location'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Nonthly Income:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['monthly_income'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Contat:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['contact'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Email:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['email'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>National ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['national_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Passport:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['passport'];?></div>
  </div>      
</div>