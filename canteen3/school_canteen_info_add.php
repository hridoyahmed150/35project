<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

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
      <label for="email">Student Name:</label>
      <input type="text" class="form-control" id="sname" placeholder="Student_Name" name="sname" required>
    </div>
    <div class="form-group">
      <label for="pwd">Duration:</label>
      <input type="text" class="form-control" id="duration" placeholder="Duration" name="duration" required>
    </div>

    <div class="form-group">
      <label for="">Amount:</label>
      <input type="text" class="form-control" id="amount" placeholder="Amount" name="amount" required>
    </div>
   
    <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Date" name="date" required>
    </div>

    <div class="form-group">
      <label for="">Agreement:</label>
      <input type="text" class="form-control" id="agreement" placeholder="Agreement" name="agreement" required>
    </div>
    <div class="form-group">
      <label for="pwd">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact" required>
    </div>
     <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
    </div>
     <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
    

    </div>    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>