<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_online_question where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h3><b>Question Information Details</b></h3>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Class:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['class'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Subject:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['subject'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Question :</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['question'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Correct Answer:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['correct_answer'];?></div>
  </div>    
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Marks:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['marks'];?></div>
</div>