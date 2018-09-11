<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_event_participant where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1 align="center">Event Management System </h1>
<h2 align="center">Participant's Entry</h2>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Event ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['event_id'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Topic type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['topic'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Status:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['cstatus'];?></div>

  </div>  
  
   
