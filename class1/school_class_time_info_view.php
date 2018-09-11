<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_class_time where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Class Time Schedule</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Class Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['class_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Number of Student:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['no_of_student'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Section:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['section'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Shift:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['shift'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Class Subject:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['subject'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Class day:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['class_day'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Class Time:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['class_time'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Class Location:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['class_location'];?></div>

  </div> 
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Class Teacher ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['class_teacher_id'];?></div>
  </div>      
</div>