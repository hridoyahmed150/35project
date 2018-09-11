<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php include "circular_header.php"; ?>
  
<div class="container">
  <h3>Student Dashboard</h3>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="school_circular.php">
        <img src="asset/img/img.jpg" class="thumbnail" width="100%"
        height="200 px">
        <p align="center">School Circular</p></a>
        
    </div>
    <!--
  	<div class="col-md-4 col-sm-4">
    	<a href="school_circular_app_exp_info.php"><img src="asset/img/img2.gif" class="thumbnail" 
        width="100%" height="200 px">
        <p align="center">Experience Info</p></a>
    </div>
    <div class="col-md-4 col-sm-4">
      <a href="school_circular_app_reference_info.php">
        <img src="asset/img/img3.jpg" class="thumbnail" width="100%"
        height="200 px">
        <p align="center"> Reference Information</p></a>
        
    </div>
    
    <div class="col-md-4 col-sm-4">
      <a href="school_circular_cand_selection_sys.php">
        <img src="asset/img/img4.jpg" class="thumbnail" width="100%"
        height="200 px">
        <p align="center">Selection System</p></a>
        
    </div>-->
    <div class="col-md-4 col-sm-4">
      <a href="school_circular_confirmation_manag_sys.php">
        <img src="asset/img/img5.png" class="thumbnail" width="100%"
        height="200 px">
        <p align="center">Confirmation Manag System</p></a>
        
    </div>
       
  </div>  	
</div>

<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>



