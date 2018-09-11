<?php 
@session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){

 ?>

<?php include "accounts_header.php"; ?>
  
<div class="container">
  <h3>Accounts Dashboard</h3>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="school_acc_ledger.php"><img src="img/acc1.png" class="thumbnail" width="100%" 
        height="200 px">
        <p align="center">Ledger</p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="school_acc_cash_book.php"><img src="img/acc2.jpg" class="thumbnail" 
        width="100%" height="200 px">
        <p align="center">Cash Book</p></a>
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="school_acc_trial_balance.php">
        <img src="img/acc3.jpg" class="thumbnail"  width="100%" height="200 px">
        <p align="center">Trial Balance</p></a>
        
    </div>      
  </div>
  <div class="row">
  	<div class="col-md-4 col-sm-4">
    	<a href="school_acc_income_statement.php">
        <img src="img/acc4.jpg" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center">Income Statement</p></a>
        
    </div>
  	<div class="col-md-4 col-sm-4">
    	<a href="school_acc_balance_sheet.php">
        <img src="img/acc5.jpg" class="thumbnail"  width="100%" height="200 px"> 
        <p align="center">Balance Sheet</p></a>
        
    </div>      
  </div>  	
</div>

<?php include "../footer.php"; ?>

<?php  } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>



