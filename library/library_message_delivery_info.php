
<?php @session_start();?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>	
<div class="container">
<hr />
  <h2>Library Message Delivery System</h2>
<hr />  
  <form action="library_message_delivery_info_store.php" method="post">
    <div class="form-group">
      <label for="member_id">Member Id:</label>
      <select class="form-control" id="member_id" name="member_id" required>
      	<option value="<?php print $_GET['id']; ?>"><?php print $_GET['id']; ?></option>
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
      <label for="">Date:</label>
      <input type="date" class="form-control" id="cdate" name="cdate" required>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
