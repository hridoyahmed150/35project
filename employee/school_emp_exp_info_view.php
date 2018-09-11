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
	$sql = "select * from school_emp_exp_info where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>

<hr />
<h3><center><b>Employee Experience Information Details</b></center></h3>
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
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Company Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['company_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Designation:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['designation'];?></div>
  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Year:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['year'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Salary:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['salary'];?></div>
  </div>    
<hr />
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>