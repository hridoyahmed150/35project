<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php include "circular_header.php"; ?>
  

<div class="container">
<hr />
  <h2>Circular Reference Information</h2>
<hr />  
  <form action="school_circular_app_reference_info_store.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="lab_type" placeholder="Name" name="name" required>
    </div>
    <div class="form-group">
        <label for="designation">Designation:</label>
        <select class="form-control" id="designation" name="designation"   required>
              <option value="select">Select</option>
              <option value='student'>Student</option>
              <option value='teacher'>Teacher</option>
          </select>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Address:" name="address" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Contact:" name="contact" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Email:" name="email" required>
    </div>


   
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>