
<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='canteen'){

 ?>
<?php 
include "canteen_header.php"; 
include "print.php";

	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_canteen where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>School Canteen Information Detils</h1>
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
    <h2 align="center" style="color:red;">XYZ School</h2>
    <p>195, Bonani, Chairman Goli, Dhaka, Bangladesh</p>
    <p>Telephone: 02-420420420</p>
    <p>Email: faru@gmail.com</p>
<div>
<hr />
<!-- print header end -->	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Duration:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['duration'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Amount:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['amount'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>cDate:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['date'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Agreement:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['agreement'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Contact:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['contact'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['address'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Email:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['email'];?></div>

  </div> 
<hr />
     
</div>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>
