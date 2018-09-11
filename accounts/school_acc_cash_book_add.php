<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){
 ?>
 
<?php include "accounts_header.php"; ?> 	


<div class="container">
<hr />
  <h3><center><b>Add Revenue and Expenses</b></center></h3>
<hr />  
  <form action="school_acc_cash_book_store.php" method="post">
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="" name="date" required>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Description" name="description" required>
    </div>

    <div class="form-group">
      <label for="amount">Amount:</label>
      <input type="number" class="form-control" id="amount" placeholder="Amount" name="amount" required>
    </div>

    <div class="form-group">
      <label for="type">Type:</label>
      <select class="form-control" id="type" name="type"  required>
        <option value="">Select</option>
        <option value="Debit">Debit</option>
        <option value="Credit">Credit</option>
      </select>
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