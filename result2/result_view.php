<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_result where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Student Result Information Detils</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student_Id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Class:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['class'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Subject:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['subject'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Mark:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['mark'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Grade:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['grade'];?></div>

  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['cdate'];?></div>  
   </div> 
<hr />


    <div class="col-sm-3 col-md-3" style="background-color:"><b>Exam Type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['exam_type'];?></div>

  </div> 
<hr />      
</div>