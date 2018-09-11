<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_std_pinfo where id=".$id;
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
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['sname'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Duration:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['duration'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Amount:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['amount'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['date'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Agreement:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['agreement'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Contact:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['contact'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['address'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Email:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['email'];?></div>

  </div> 
<hr />
     
</div>

  student_name  duration  amount  date  agreement  contact  address  email
