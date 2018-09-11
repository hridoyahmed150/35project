<?php
	//get id
	 $id = $_GET['id'];
  //adding header
    include "../header.php";
	//sql query to information of this ID
	$sql = "select * from school_circular_candidate_selection_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Candidate Selection System</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Applicant Id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['applicant_id'];?></div>
  </div>
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Interview Time:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['interview_time'];?></div>

  </div>  
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Interview Location:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['interview_location'];?></div>

  </div>  
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Message Applicant:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['message_applicant'];?></div>

  </div>  
<hr />
 
