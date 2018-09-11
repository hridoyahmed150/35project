<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='notice'){

 ?>	

<?php include "student_header.php"; ?>
  
<div class="container">
  <h3 align="center">Notice Dashboard</h3>
  <div class="row" align="center">
  	<div class="col-md-12">
    	<a href="school_notice_info.php"><img src="img/images.jpg" class="thumbnail" width="20%" 
        height="30%">
        <p align="center">Notice Info</p></a>
        
    </div>

<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>


