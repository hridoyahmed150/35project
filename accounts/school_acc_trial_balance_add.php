<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){
 ?>
 
<?php include "accounts_header.php"; ?> 	


<div class="container">
<hr />
  <h3><center><b>Add Revenue and Expenses</b></center></h3>
<hr />  
  <form action="school_acc_trial_balance_store.php" method="post">
    <div class="form-group">
      <label for="serial_no">Serial No:</label>
      <input type="number" class="form-control" id="serial_no" placeholder="" name="serial_no" required>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Description" name="description" required>
    </div>

    <div class="form-group">
      <label for="debit_amount">Debit Amount:</label>
      <input type="number" class="form-control" id="debit_amount" placeholder="Debit Amount" name="debit_amount" required>
    </div>

    <div class="form-group">
      <label for="credit_amount">Credit Amount:</label>
      <input type="number" class="form-control" id="credit_amount" placeholder="Credit Amount" name="credit_amount"  required>
    </div>

    <div class="form-group">
      <label for="total_balance">Total Balance:</label>
      <input type="number" class="form-control" id="total_balance" placeholder="Total Balance" name="total_balance" required>
    </div>

    <div class="form-group">
      <label for="reference">Reference:</label>
      <input type="text" class="form-control" id="reference" placeholder="Reference" name="reference" required>
    </div>    

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>