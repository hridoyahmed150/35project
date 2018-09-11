<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>
 
<?php include "employee_header.php"; ?> 



<div class="container">
<hr />
  <h3><center><b>Add Employee Reference Information</b></center></h3>
<hr />  
  <form action="school_emp_ref_info_store.php" method="post">
    <div class="form-group">
      <label for="ref_name">Name:</label>
      <input type="text" class="form-control" id="ref_name" placeholder="Enter Name" name="ref_name" required>
    </div>

    <div class="form-group">
      <label for="ref_designation">Designation:</label>
      <select class="form-control" id="ref_designation" name="ref_designation" placeholder="" required>
        <option value="">Select</option>
        <option value="Teacher">Teacher</option>
        <option value="Accountant">Accountant</option>
        <option value="Librarian">Librarian</option>
        <option value="IT Specialist">IT Specialist</option>
        <option value="Computer Operator">Computer Operator</option>
      </select>
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
    </div>

    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="number" class="form-control" id="contact" placeholder="Contact" name="contact"  required>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Permanent Address" name="email" required>
    </div>

    <div class="form-group">
      <label for="job_responsibility">Job Responsibility:</label>
      <input type="text" class="form-control" id="job_responsibility" placeholder="Job Responsibility" name="job_responsibility" required>
    </div>

    <div class="form-group">
      <label for="joining_date">Joining Date:</label>
      <input type="date" class="form-control" id="joining_date" placeholder="Joining Date" name="joining_date" required>
    </div>

    <div class="form-group">
      <label for="reporting_authority">Reporting Authority:</label>
      <textarea class="form-control" rows="3" cols="10" name="reporting_authority" id="reporting_authority"></textarea>
    </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>