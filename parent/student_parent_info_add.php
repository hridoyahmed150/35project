<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Add Student Parent's Information</h2>
<hr />  
  <form action="student_parent_info_store.php" method="post">
    <div class="form-group">
      <label for="student_id">Student ID:</label>
      <input type="text" class="form-control" id="student_id" placeholder="Enter stufent id" name="student_id" required>
    </div>
    <div class="form-group">
      <label for="profession">Profession:</label>
      <input type="text" class="form-control" id="profession" placeholder="Profession Parent" name="profession" required>
    </div>

    <div class="form-group">
      <label for="office_location">Office location:</label>
      <input type="text" class="form-control" id="office_location" placeholder="Office location" name="office_location" required>
    </div>
    <div class="form-group">
      <label for="income">Monthly income:</label>
      <input type="text" class="form-control" id="monthly_income" placeholder="Monthly income" name="monthly_incomee"  required>
    </div>

    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" class="form-control" id="pcontact" placeholder="Contact" name="pcontact" required>
    </div>
    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" class="form-control" id="pemail" Enter Email Address="" name="pemail" required>
    </div>

    <div class="form-group">
      <label for="national_id">National ID:</label>
      <input type="text" class="form-control" id="national_id" placeholder="National ID" name="national_id" required>
    </div>
    <div class="form-group">
      <label for="passport">Passport:</label>
      <input type="text" class="form-control" id="passport" placeholder="Passport" name="passport">
    </div>    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>