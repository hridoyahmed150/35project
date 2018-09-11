<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='member'){

 ?>
<?php include "member_header.php"; ?>  
<div class="container">
  <h3>Student Dashboard</h3>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="studen_personal_info.php"><img src="img/img1.png" class="thumbnail" width="100%" 
        height="200 px">
        <p align="center">Personal Info</p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="#"><img src="img/img2.jpg" class="thumbnail" 
        width="100%" height="200 px">
        <p align="center">Education Info</p></a>
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="#">
        <img src="img/img3.jpg" class="thumbnail"  width="100%" height="200 px">
        <p align="center">Parents Info</p></a>
        
    </div>      
  </div>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="#">
        <img src="img/img2.png" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center">Result Info</p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="#">
        <img src="img/img4.jpg" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center">Notice</p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="#">
        <img src="img/img3.png" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center">Attendance Info</p></a>
        
    </div>      
  </div>  	
</div>

<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>


