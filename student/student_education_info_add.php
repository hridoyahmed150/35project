<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php include "student_header.php"; ?>
 
<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Add Student Education Information</h2>
<hr />  
  <form action="student_education_info_store.php" method="post">
    <div class="form-group">
      <label for="email">Student ID:</label>
      <select class="form-control" id="emp_id" placeholder="Student ID" name="emp_id" required>
      	<option value="">Student ID</option>
        <?php  $result = mysqli_query($con,"select * from school_std_pinfo"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="pwd">Previous School Name:</label>
      <input type="text" class="form-control" id="previous_school_name" placeholder="Name of Father" name="previous_school_name" required>
    </div>

    <div class="form-group">
      <label for="">Reason Leaving Previous School:</label>
      <textarea class="form-control" id="reason_leaving_previous_school" placeholder="Name of Mother" name="reason_leaving_previous_school" required></textarea>
    </div>
    <div class="form-group">
      <label for="">Result Previous School:</label>
      <input type="text" class="form-control" id="result_previous_school" placeholder="Present Address" name="result_previous_school"  required>
    </div>

    <div class="form-group">
      <label for="">First Enrolled Class:</label>
      <input type="text" class="form-control" id="first_enrolled_class" placeholder="Permanent Address" name="first_enrolled_class" required>
    </div>

    <div class="form-group">
      <label for="">Admission Date:</label>
      <input type="date" class="form-control" id="admission_date" placeholder="" name="admission_date" required>
    </div>

   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>