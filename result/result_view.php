<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='result'){

 ?>
 <?php 
include "result_header.php"; 
 include "print.php";


?>
<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_std_result where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1 align="center">Student Result Information Detils</h1>
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
<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>