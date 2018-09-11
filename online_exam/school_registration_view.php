<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from  school_online_registration where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Registration System</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>User name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['user_name'];?></div>

  </div>  
<hr />

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Password:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['password'];?></div>

  </div>  
  
  