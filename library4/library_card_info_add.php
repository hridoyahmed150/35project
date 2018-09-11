
<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>
<div class="container">
<hr />
  <h2>Add library Card Information</h2>
<hr />  
  <form action="library_card_info_store.php" method="post">
    <div class="form-group">
      <label for="member_id">Member ID:</label>
	<select class="form-control" id="member_id" placeholder="" name="member_id" required>
      	<option value="1">1</option>
      	<option value="2" >2</option>
      	<option value="3" >3</option>
      	<option value="4">4</option>
      	<option value="5">5</option>
    </select>
    </div>
    <div class="form-group">
      <label for="member_type">Member Type:</label>
		<select  class="form-control" id="member_type" placeholder="" name="member_type" required>
      	<option value="Tacher">Tacher</option>
      	<option value="Student" >Student</option>
      	<option value="Staff" >Staff</option>
      	<option value="Public">Public</option>
      	<option value="Others">Others</option>
      </select>
     </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="contact" class="form-control" id="contact" placeholder="Enter Contact Number" name="contact"  required>
    </div>
    <div class="form-group">
      <label for="card_validation_date">Card Validation Date:</label>
      <input type="date" class="form-control" id="card_validation_date" placeholder="" name="card_validation_date" required
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>