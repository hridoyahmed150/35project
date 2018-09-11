<?php
    //adding header
    include "../header.php";
?>  


<div class="container">
<hr />
  <h2>Lab Equipment Ditribution System</h2>
<hr />  
  <form action="school_lab_euipment_distribution_store.php" method="post">
    <div class="form-group">
        <label for="student_id">Student Id:</label>
        <select class="form-control" id="student_id" name="student_id"   required>
      	<option value="">Student ID</option>
        <?php  $result = mysqli_query($con,"select * from school_std_pinfo"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
          </select>
    </div>
    
    <div class="form-group">
      <label for="receive_date">Receive Date:</label>
      <input type="date" class="form-control" id="receive_date" placeholder="Receive Date:" name="receive_date" required>
    </div>
    <div class="form-group">
      <label for="submission_date">Submission Date:</label>
      <input type="date" class="form-control" id="submission_date" placeholder="Submission Date:" name="submission_date" required>
    </div>
    <div class="form-group">
        <label for="equipment_id">Equipment Id:</label>
        <select class="form-control" id="equipment_id" name="equipment_id"   required>
      	<option value="">Equipment ID</option>
        <?php  $result = mysqli_query($con,"select * from school_lab_equipment_information"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
          </select>
    </div>


   
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>