<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){
 ?>
 
<?php
    //adding header
    include "accounts_header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_acc_balance_sheet where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2><center>Edit Employee Personal Information</center></h2>
<hr />  
  <form action="school_acc_balance_sheet_update.php" method="post">
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
      <label for="liabilities">Liabilities:</label>
      <input type="number" class="form-control" id="liabilities" placeholder="Liabilities and Owners Equity" name="liabilities" value="<?php print $row['liabilities'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="assets">Current Assets:</label>
      <input type="number" class="form-control" id="assets" placeholder="Current Assets and Fixed Assets" name="assets" value="<?php print $row['assets']; ?>" required>
    </div>

    <div class="form-group">
      <label for="total_balance">Total Balance:</label>
      <input type="number" class="form-control" id="total_balance" placeholder="Total Balance" name="total_balance" value="<?php print $row['total_balance']; ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>