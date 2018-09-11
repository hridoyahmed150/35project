<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php include "circular_header.php"; ?>

<div class="container">
<hr />
  <h2>Circular Experience Information</h2>
<hr />  
  <form action="school_circular_app_exp_info_store.php" method="post">
    <div class="form-group">
      <label for="company_name">Company Name:</label>
      <input type="text" class="form-control" id="lab_type" placeholder="Company Name" name="company_name" required>
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
      <label for="year">Year:</label>
      <input type="date" class="form-control" id="year" placeholder="Year:" name="year" required>
    </div>
    <div class="form-group">
      <label for="salary">Salary:</label>
      <input type="text" class="form-control" id="salary" placeholder="Salary:" name="salary" required>
    </div>


   
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>