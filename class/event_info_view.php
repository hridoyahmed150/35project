
<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='class'){

 ?>

<?php include "student_header.php"; include "print.php";?>
<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	include "print.php";
	//sql query to information of this ID
	$sql = "select * from school_event_participant where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>

<hr />
<h1 align="center">Event Management System </h1>
<h2 align="center">Participant's Entry</h2>
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
	
<div class="container">
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Event ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['event_id'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Topic type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['topic'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Status:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['cstatus'];?></div>

  </div>  
  
 <?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>  
