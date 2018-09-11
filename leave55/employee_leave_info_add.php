<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='leave'){
    include "../db/dbcon.php";

 ?>
<?php 
include "student_leave_header.php"; 
?>
<div class="container">
<hr />
  <h2>Employee Leave Information</h2>
<hr />  
  <form action="employee_leave_info_store.php" method="post">

    <div class="form-group">
      <label for="leave type">leave type:</label>
      <select class="form-control" id="leave_type" name="leave_type"  required>
      	<option value="">Select leave type</option>
        <option value="sick leave">sick leave</option>
        <option value="casual leave">casual leave</option>
        <option value="annual leave">annual leave</option>


      </select>
    </div>

    <div class="form-group">
      <label for="leave start date">leave start date</label>
      <input type="date" class="form-control" id="leave_start_date" placeholder="leave start date" name="leave_start_date" required>
    </div>
    <div class="form-group">
      <label for="leave end date">leave end date</label>
      <input type="date" class="form-control" id="leave_end_date" placeholder="leave end date" name="leave_end_date"  required>
    </div>

    <div class="form-group">
      <label for="employee id">employee id</label>
      <select class="form-control" id="employee_id" name="employee_id"  required>
        <?php  $result = mysqli_query($con,"select * from school_emp_info"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
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