<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){
 ?>
 
<?php include "accounts_header.php"; ?>	


<div class="container">
<hr />
  <h3><center><b>Add Current Assets and Liabilities</b></center></h3>
<hr />  
  <form action="school_acc_balance_sheet_store.php" method="post">
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="" name="date" required>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Description" name="description" required>
    </div>

    <div class="form-group">
      <label for="liabilities">Liabilities:</label>
      <input type="number" class="form-control" id="liabilities" placeholder="Liabilities and Owners Equity" name="liabilities" required>
    </div>

    <div class="form-group">
      <label for="assets">Current Assets:</label>
      <input type="number" class="form-control" id="assets" placeholder="Current Assets and Fixed Assets" name="assets"  required>
    </div>

    <div class="form-group">
      <label for="total_balance">Total Balance:</label>
      <input type="number" class="form-control" id="total_balance" placeholder="Total Balance" name="total_balance" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>