<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php 
include "student_leave_header.php"; 
include "print.php";

	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_leave_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Student leave Information Details</h1>
<hr />
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
    <h2 align="center" style="color:red;">Little Flower School</h2>
    <p>195, Bonani, Chairman Goli, Dhaka, Bangladesh</p>
    <p>Telephone: 02-420420420</p>
    <p>Email: faru@gmail.com</p>
<div>
<hr />
<!-- print header end -->
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>cstatus</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['cstatus'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Type</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['leave_type'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Start Date</b> 
	</div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['leave_start_date'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:">
	<b>End Date</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['leave_end_date'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student id</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['student_id'];?></div>
  </div> 
  <?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>  

