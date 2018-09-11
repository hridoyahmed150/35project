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
	$sql = "select * from school_class_time where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<hr />
<h1>Class Time Schedule</h1>
<hr />
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
</div>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>