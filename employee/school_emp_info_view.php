<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>

<?php
  //get id
  $id = $_GET['id'];
    //adding header
    include "employee_header.php";
	    include "print.php";
	//sql query to information of this ID
	$sql = "select * from school_emp_info where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>

<hr />
<center><h3><b>Employee Personal Information Details</b></h3></center>
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
    <h2 align="center" style="color:red;">FulKuri School</h2>
    <p>195, Bonani, Chairman Goli, Dhaka, Bangladesh</p>
    <p>Telephone: 02-420420420</p>
    <p>Email: fulkuri@gmail.com</p>
</div>
<hr />
<!-- print header end -->

<div class="container">
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Name of Student:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Name of Father:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['father_name'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Name of Mother:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['mother_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Present Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['present_address'];?></div>
  </div>    
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Permanent Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['permanent_address'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Religion:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['religion'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Nationality:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['nationality'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>National ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['national_id'];?></div>
  </div> 
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Gender:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['gender'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Marital Status:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['marital_status'];?></div>
  </div> 
<hr />
    <div class="row">
      <div class="col-sm-3 col-md-3" style="background-color:"><b>Blood Group:</b> </div>
      <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['blood_group'];?></div>
    </div>
<hr />  
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>