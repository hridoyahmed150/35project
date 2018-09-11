<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){
 ?>
 
<?php
    //adding header
    include "accounts_header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_acc_ledger where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2><center>Edit Ledger Book Information</center></h2>
<hr />  
  <form action="school_acc_ledger_update.php" method="post">
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">      
      <input type="date" class="form-control" id="date" placeholder="" name="date" value="<?php print $row['date'];  ?>" required>
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