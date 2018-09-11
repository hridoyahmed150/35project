<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>

<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "employee_header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_emp_edu_info where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h3><center><b>Employee Education Information Details</b></center></h3>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3"><b>Exam type:</b> </div>
    <div class="col-sm-3 col-md-3"><?php print $row['exam_type'];?></div>

    <div class="col-sm-3 col-md-3"><b>Passing year:</b> </div>
    <div class="col-sm-3 col-md-3"><?php print $row['passing_year'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3"><b>Board or University:</b> </div>
    <div class="col-sm-3 col-md-3"><?php print $row['board_or_university'];?></div>

    <div class="col-sm-3 col-md-3"><b>Result:</b> </div>
    <div class="col-sm-3 col-md-3"><?php print $row['result'];?></div>
  </div>    
<hr />
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>