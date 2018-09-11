<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>
 
<?php
    //adding header
 include "employee_header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_emp_ref_info where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2><center>Edit Employee Personal Information</center></h2>
<hr />  
  <form action="school_emp_ref_info_update.php" method="post">
    <div class="form-group">
      <label for="ref_name">Name:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">
      <input type="text" class="form-control" id="ref_name" placeholder="Enter Name" name="ref_name" value="<?php print $row['ref_name'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="ref_designation">Designation:</label>
      <select class="form-control" id="ref_designation" name="ref_designation" placeholder="" required>
        <option value="<?php print $row['ref_designation'];  ?>">
          <?php print $row['ref_designation'];  ?></option>
        <option value="Teacher">Teacher</option>
        <option value="Accountant">Accountant</option>
        <option value="Librarian">Librarian</option>
        <option value="IT Specialist">IT Specialist</option>
        <option value="Computer Operator">Computer Operator</option>
      </select>
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="<?php print $row['address'];  ?>" required>
    </div>    

    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="number" class="form-control" id="contact" placeholder="Contact" name="contact" value="<?php print $row['contact'];  ?>"  required>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Permanent Address" name="email" value="<?php print $row['email'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="job_responsibility">Job Responsibility:</label>
      <input type="text" class="form-control" id="job_responsibility" placeholder="Job Responsibility" name="job_responsibility" value="<?php print $row['job_responsibility'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="joining_date">Joining Date:</label>
      <input type="date" class="form-control" id="joining_date" placeholder="Joining Date" name="joining_date" value="<?php print $row['joining_date'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="reporting_authority">Reporting Authority:</label>
      <textarea class="form-control" rows="3" cols="10" name="reporting_authority" id="reporting_authority" value="<?php print $row['reporting_authority'];  ?>"></textarea>
    </div>    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>