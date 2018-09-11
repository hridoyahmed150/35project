
<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='salary'){


include "employee_header.php"; ?>
  
<div class="container">
  <h3> Salary Dashboard</h3>
  <div class="row">     
  </div>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="employee_salary_info.php">
        <img src="img/salary.jpg" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center">Salary Info</p></a>
        
    </div>
  	
  	     
  </div>  	
</div>

<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>


