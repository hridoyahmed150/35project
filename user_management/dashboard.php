<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='user_manage'){

 ?>	

<?php include "user_management_header.php"; ?>
  
<div class="container">
  <h3 align="center">user management Dashboard</h3>
  <div class="row" align="center">
  	<div class="col-md-12">
    	<a href="user_management_info.php"><img src="img/img1.jpg" class="thumbnail" width="20%" 
        height="30%">
        <p align="center">user management Info</p></a>
        
    </div>

<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>


