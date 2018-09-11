

<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>

<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_library_card where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit library Card Information</h2>
<hr />  
  <form action="library_card_info_update.php" method="post">
    <div class="form-group">
      <label for="member_id">Member ID:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id']; ?>" required> 
	<select class="form-control" id="member_id" placeholder="" name="member_id"  required>
      	<option value="<?php print $row['member_id'];  ?>"><?php print $row['member_id'];  ?></option>
      	<option value="1">1</option>
      	<option value="2" >2</option>
      	<option value="3" >3</option>
      	<option value="4">4</option>
      	<option value="5">5</option>
    </select>
    </div>
    <div class="form-group">
      <label for="member_type">Member Type:</label>
	<select class="form-control" id="member_type" placeholder="" name="member_type" required>
      	<option value="<?php print $row['member_type'];  ?>"><?php print $row['member_type'];  ?></option>
      	<option value="Tacher">Tacher</option>
      	<option value="Student" >Student</option>
      	<option value="Staff" >Staff</option>
      	<option value="Public">Public</option>
      	<option value="Others">Others</option>
    </select>
    </div>
    <div class="form-group">
      <label for="">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"  value="<?php print $row['name']; ?>" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter Contact Number" name="contact"  value="<?php print $row['contact']; ?>"  required>
    </div>
    <div class="form-group">
      <label for="card_validation_date">Card Validation Date:</label>
      <input type="date" class="form-control" id="card_validation_date" placeholder="" name="card_validation_date" value="<?php print $row['card_validation_date']; ?>" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>