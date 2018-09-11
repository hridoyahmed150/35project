<?php @session_start();
    if(isset($_SESSION['username']) && $_SESSION['department']=='attendance'){

 ?>

<?php 
  //add header
  include "attendance_header.php";
  include "print.php";
?>

<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from attendance_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="well text-center"><h1 style="color:#19bb19">Student Personal Attendance Detils</h1></div>
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
<div class="container">

<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['type'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['stu_id'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Day:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['day'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Status:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['sstatus'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Entry Time:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['entry_time'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Exit Time:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['exit_time'];?></div>

  </div>  
  <hr> 
  
<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>