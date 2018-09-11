<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='laboratory'){

 ?>
<?php
  //get id
   $id = $_GET['id'];
  //adding header
     include "laboratory_header.php";
    include "print.php";
  //sql query to information of this ID
  $sql = "select * from school_lab_euipment_distribution where id=".$id;
  //execute the query
  $result = mysqli_query($con,$sql);
  //fetch the resultset
  $row = mysqli_fetch_array($result);
    
?>
<div class="container">
<hr />
<h1>Lab Equipment Ditribution System</h1>
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

<!-- print header end -->
<hr />  
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Student_id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['student_id'];?></div>
  </div>
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Receive Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['receive_date'];?></div>

  </div>  
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Submission Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['submission_date'];?></div>

  </div>  
<hr />
<div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Equipment Id:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['equipment_id'];?></div>

  </div>  
<hr />
<?php include "laboratory_footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>


