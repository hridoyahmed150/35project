
<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='result'){ ?>
 <?php include "result_header.php"; ?>
  
<div class="container">
  <h3>Student Dashboard</h3>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="result_info.php">
        <img src="img/5.JPG" class="thumbnail" width="100%"
        height="200 px">
        <p align="center">Student Result</p>
        </a>        
    </div>
  
  </div>  	
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>



