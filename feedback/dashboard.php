<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='feedback'){

 ?>	
<?php include "student_header.php"; ?>
<div class="container">
  <h3 align="center">Feedback Dashboard</h3>
  <div class="row">
  	<div class="col-md-12">
    	<a href="school_feedback_info.php"><img src="img/images.png" class="thumbnail" width="30%" 
        height="20%">
        <p align="center">Feedback Info</p></a>
        
    </div>
  	
<?php include "footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>

