<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='tution_fee'){

 ?>
<?php include "tution_fee_header.php"; ?>
  
<div class="container">
  <h3>Tution Fee Dashboard</h3>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="tution_mg_sys.php"><img src="img/2.JPG" class="thumbnail" width="100%" 
        height="200 px">
        <p align="center">Tution Fee</p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="tution_fees_list.php"><img src="img/3.jpg" class="thumbnail" 
        width="100%" height="200 px">
        <p align="center">Tution Fee list </p></a>
    </div><!--
  	<div class="col-md-4 col-sm-4">
    	<a href="../student/studen_personal_info.php">
        <img src="img/img3 .JPG" class="thumbnail"  width="100%" height="200 px">
        <p align="center">Student Info</p></a>
        
    </div>-->      
  </div>
  
  <div class="row"><!--
  	<div class="col-md-4 col-sm-4">
    	<a href="sms.php">
        <img src="img/st2.JPG" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center">SMS</p></a>
        
    </div>-->
  	<div class="col-md-4 col-sm-4">
    	<a href="#">
        <img src="img/12.JPG" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center"></p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="#">
        <img src="img/56.JPG" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center"></p></a>
        
    </div>      
  </div>  	
</div>

<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>


