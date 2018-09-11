<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='tution_fee'){

 ?>
 
<?php 
include "tution_fee_header.php";
include "../header.php";
 ?>
<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "print.php";
	//sql query to information of this ID
	$sql = "select * from school_tution_fee where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row=mysqli_fetch_array($result);
	
	
?>
<!-- print button start -->
<div align="right" style="margin-top:-10px;margin-top:-10px;margin-right:50px;padding:0px;">
  <input type="button" value="print" onclick="PrintDiv();" 
  class="btn btn-primary"
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
    <h2 align="center" style="color:red;">Scholar School</h2>
    <p>195, Bonani, Chairman Goli, Dhaka, Bangladesh</p>
    <p>Telephone: 02-420420420</p>
    <p>Email: faru@gmail.com</p>
<div>
<hr />
<!-- print header end -->
<div class="container">
<hr />
<h1 align="center">Tution Fees Information Detils</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b> Student ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Paid Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['paid_date'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Paid Month:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['paid_month'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Paid Year:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['paid_year'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Amount:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['fee_paid'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Paid Status:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['paid_status'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Comments:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['comments'];?></div>

  </div>      
</div>
<br>
<hr>
<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>