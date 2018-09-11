

<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; 
	  include "print.php";
?>
<?php
    //adding header
    include "../header.php";
?>

<?php
	//get id
	$id = $_GET['id'];
	//sql query to information of this ID
	$sql = "select * from school_libr_registration_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>View Library Registration Information</h1>
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
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>User Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['user_name'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Image:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['image'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Contact:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['contact'];?></div>

  </div> 
  <hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['type'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Password:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['password'];?></div>

  </div> 
  <hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Address:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['address'];?></div>
  </div>  
</div>
<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>