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
  <h2>Add Library Message Delivery Information</h2>
<hr />  
  <form action="library_message_delivery_info_store.php" method="post">
    <div class="form-group">
      <label for="member_id">Member Id:</label>
      <select class="form-control" id="member_id" name="member_id" required>
      	<option value="1">1</option>
      	<option value="2" >2</option>
      	<option value="3" >3</option>
      	<option value="4">4</option>
      	<option value="5">5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea rows="6" cols="10" id="message" name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="message">Address:</label>
      <textarea rows="5" cols="10" id="address" name="address" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="cdate" name="cdate" required>
    </div>
    <div class="form-group">
      <label for="">Reason:</label>
	<select class="form-control" id="reason"  name="reason" required>
      	<option value="Issue Date Over">Issue Date Over</option>
        <option value="Issue Date Over">Issue Date Over</option>
        <option value="Issue Date Over">Issue Date Over</option>
        <option value="Issue Date Over">Issue Date Over</option>
    </select>
      </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>