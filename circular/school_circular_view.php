<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>
<?php
	//get id
	 $id = $_GET['id'];
  //adding header
    include "circular_header.php";
	//sql query to information of this ID
	$sql = "select * from school_circular where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Circular System</h1>
<!-- print button start -->
<div align="right" style="margin-top:-10px;margin-top:-10px;margin-right:50px;padding:0px;">
  <input type="button" value="print" onclick="PrintDiv();" 
  class="btn btn-success"
  />
</div>
<!-- print button end -->
<!-- print header start -->
        <div id="divToPrint">

<div align="center" id='print' class="container">
    <style>
        #print p{
            margin-top: -10px;
            
        }
    </style>
    <h2 align="center" style="color:red;">XYZ School</h2>
    <p>195, Bonani, Chairman Goli, Dhaka, Bangladesh</p>
    <p>Telephone: 02-420420420</p>
    <p>Email: faru@gmail.com</p>
<div>
<hr />
<!-- print header end -->
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Job Type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['job_type'];?></div>
  </div>
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Educational Qualification:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['educational_qualification'];?></div>

  </div>  
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Required Experience:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['required_experience'];?></div>

  </div>
  <hr />  
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Jon Salary:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['job_salary'];?></div>
<hr />
  </div> 
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Job Location:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['job_location'];?></div>

  </div>
  <hr /> 

  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Job Time:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['job_time'];?></div>

  </div> 
<hr />

<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>
