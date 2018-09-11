<?php 
@session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){

 ?>

<?php include "employee_header.php"; ?>
  
<div class="container">
  <h3>Employee Dashboard</h3>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="school_emp_info.php"><img src="img/img1.png" class="thumbnail" width="100%" 
        height="200 px">
        <p align="center">Personal Information</p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="school_emp_edu_info.php"><img src="img/img2.jpg" class="thumbnail" 
        width="100%" height="200 px">
        <p align="center">Education Information</p></a>
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="school_emp_exp_info.php">
        <img src="img/img3.jpg" class="thumbnail"  width="100%" height="200 px">
        <p align="center">Experience Information</p></a>
        
    </div>      
  </div>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="school_emp_ref_info.php">
        <img src="img/img2.png" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center">Reference Information</p></a>        
    </div>    
  </div>  	
</div>

<?php include "../footer.php"; ?>

<?php  } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>

