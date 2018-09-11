<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){
 ?>
 
<?php
    //adding header
    include "accounts_header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_acc_trial_balance where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2><center>Edit Trial Balance Information</center></h2>
<hr />  
  <form action="school_acc_trial_balance_update.php" method="post">
    <div class="form-group">
      <label for="serial_no">Serial No:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">      
      <input type="serial_no" class="form-control" id="serial_no" placeholder="" name="serial_no" value="<?php print $row['serial_no'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Description" name="description" value="<?php print $row['description'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="debit_amount">Debit Amount:</label>
      <input type="number" class="form-control" id="debit_amount" placeholder="Debit Amount" name="debit_amount" value="<?php print $row['debit_amount'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="credit_amount">Credit Amount:</label>
      <input type="number" class="form-control" id="credit_amount" placeholder="Credit Amount" name="credit_amount" value="<?php print $row['credit_amount']; ?>" required>
    </div>

    <div class="form-group">
      <label for="total_balance">Total Balance:</label>
      <input type="number" class="form-control" id="total_balance" placeholder="Total Balance" name="total_balance" value="<?php print $row['total_balance']; ?>" required>
    </div>

    <div class="form-group">
      <label for="reference">Reference:</label>
      <input type="text" class="form-control" id="reference" placeholder="Reference" name="reference" value="<?php print $row['reference']; ?>" required>
    </div>    

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>