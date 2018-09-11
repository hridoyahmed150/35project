<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php include "circular_header.php";
  
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_circular_applicant_reference_information where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Circular Reference Information</h2>
<hr />  
  <form action="school_circular_app_reference_info_update.php" method="post">
    <div class="form-group">
       <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id']; ?>" required> 
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php print $row['name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="designation">Designation:</label>
        <select class="form-control" id="designation" name="designation"  value="<?php print $row['designation']; ?>" required>
              <option value="select">Select</option>
              <option value='student'>Student</option>
              <option value='teacher'>Teacher</option>
          </select>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Address:" name="address"  value="<?php print $row['address']; ?>" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Contact:" name="contact" value="<?php print $row['contact']; ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Salary:" name="email" value="<?php print $row['email']; ?>" required>
    </div>



    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>