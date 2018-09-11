<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='canteen'){

 ?>
 <?php 
include "canteen_header.php";
?>
  
<div class="container">
  <h3>Canteen Dashboard</h3>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="school_canteen_info.php">
        <img src="img/canteen.jpg" class="thumbnail" width="100%" height="200 px">
        <p align="center">Canteen Info</p>
        </a>        
    </div>
  </div>  	
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>


