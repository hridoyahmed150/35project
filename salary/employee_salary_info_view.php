
<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='salary'){
 ?>
<?php include "employee_header.php"; 
  include "print.php"; 

?>




<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from salary_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Employee Salary Information Detils</h1>
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
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Designation:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['designatio'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Basic Salary:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['basic_salary'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>House Rent:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['house_rent'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Treatment:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['treatment'];?></div>

 </div>
<hr />
 <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Convince:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['convince'];?></div> 
  
  
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Provident Fund:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['provident_fund'];?></div>
<div class="row">
</div>
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Bonus:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['bonus'];?></div>

  </div>   
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Month:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['month'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Year:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['year'];?></div>

  </div> 
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Employee ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['employee_id'];?>

  </div>      
</div>
<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>