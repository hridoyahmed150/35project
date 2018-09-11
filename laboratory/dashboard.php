<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='laboratory'){
?>

<?php include "laboratory_header.php"; ?>
  
<div class="container">
  <h3>Student Dashboard</h3>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="school_lab_equipment_info.php">
        <img src="asset/img/img.jpg" class="thumbnail" width="100%"
        height="200 px">
        <p align="center">Lab Equipment Info</p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="school_lab_equipment_distribution.php"><img src="asset/img/img2.jpg" class="thumbnail" 
        width="100%" height="200 px">
        <p align="center">Lab Equipment Distribution</p></a>
    </div>
       
  </div>  	
</div>

<?php include "laboratory_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>



