<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='canteen'){

 ?>
<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Add School Canteen Information</h2>
<hr />  
  <form action="school_canteen_info_store.php" method="post">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="student_name" placeholder="student_name" name="student_name" required>
    </div>
    <div class="form-group">
      <label for="pwd">Duration:</label>
      <input type="text" class="form-control" id="duration" placeholder="duration" name="duration" required>
    </div>

    <div class="form-group">
      <label for="">Amount:</label>
      <input type="number" class="form-control" id="amount" placeholder="amount" name="amount" required>
    </div>
   
    <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="cdate" placeholder="cdate" name="cdate" required>
    </div>
    <div class="form-group">
      <label for="">Agreement:</label>
      <input type="text" class="form-control" id="agreement" placeholder="agreement" name="agreement" required>
    </div>
    <div class="form-group">
      <label for="pwd">Contact:</label>
      <input type="number" class="form-control" id="contact" placeholder="contact" name="contact" required>
    </div>
     <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="address" name="address" required>
    </div>
     <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
    

    </div>    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>