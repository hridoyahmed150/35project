<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='class'){

 ?>

<?php include "student_header.php"; ?>
  
<div class="container">
  <h2 align="center">Dashboard</h2>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="school_time_info.php"><img src="img/img1.jpg" class="thumbnail" width="100%" 
        height="200 px">
        <p align="center">Class Time Management</p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="school_event_info.php"><img src="img/event.jpg" class="thumbnail" 
        width="100%" height="200 px">
        <p align="center">Event Entry</p></a>
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="event_info.php">
        <img src="img/event entry.jpg" class="thumbnail"  width="100%" height="200 px">
        <p align="center">Participant's Entry</p></a>
        
    </div>      
  </div>
</div>

<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>

