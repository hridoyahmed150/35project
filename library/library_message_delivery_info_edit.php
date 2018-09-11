
<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>

<?php
    
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_message_delivery_management_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit Library Message Delivery Information</h2>
<hr />  
  <form action="library_message_delivery_info_update.php" method="post">
    <div class="form-group">
      <label for="member_id">Member Id:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">
      <select class="form-control" id="member_id" name="member_id"  required>
      	<option value="<?php print $row['member_id'];  ?>"><?php print $row['member_id'];  ?></option>
      	<option value="1">1</option>
      	<option value="2" >2</option>
      	<option value="3" >3</option>
      	<option value="4">4</option>
      	<option value="5">5</option>
        
      </select>      
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea rows="6" cols="10" id="message" name="message" class="form-control"><?php print $row['message']; ?></textarea>
    </div>
    <div class="form-group">
      <label for="message">Address:</label>
      <textarea rows="5" cols="10" id="address" name="address" class="form-control"><?php print $row['address']; ?></textarea>
    </div>
    <div class="form-group">
      <label for="cdate">Date:</label>
      <input type="date" class="form-control" id="cdate"  name="cdate" value="<?php print $row['cdate']; ?>" required>
    </div>
    <div class="form-group">
      <label for="reason">Reason:</label>
	<select class="form-control" id="reason" name="reason" required>
    <option value="<?php print $row['reason'];  ?>"><?php print $row['reason'];  ?></option>
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