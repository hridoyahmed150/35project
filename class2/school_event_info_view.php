<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_event_info where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1 align="center">Event Management System </h1>
<h2 align="center">Event Entry</h2>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Event Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['event_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Date of event:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['date_of_event'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Location:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['location'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Time:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['time'];?></div>
    
    
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Status:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['cstatus'];?></div>

  </div>  
  
   
