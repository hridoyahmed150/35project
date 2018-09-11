<?php
    //adding header
    include "../header.php";
?>	
<div class="container">
<hr />
  <h2>Lab Equipment Distribution</h2>
<hr />  
  <form action="school_lab_euipment_distribution_store.php" method="post">
    <div class="form-group">
      <label for="student_id">Student ID:</label>
      <input type="number" class="form-control" id="student_id" placeholder="Student ID" name="student_id" required>
    </div>
    <div class="receive_date">
      <label for="receive_date">Receive Date:</label>
      <input type="date" class="form-control" id="receive_date" placeholder="Receive Date:" name="receive_date" required>
    </div>
    <div class="submission_date">
      <label for="submission_date">Submission Date:</label>
      <input type="date" class="form-control" id="submission_date" placeholder="Submission Date:" name="submission_date" required>
    </div>
    <div class="form-group">
      <label for="equipment_id">Equipment ID:</label>
      <input type="number" class="form-control" id="equipment_id" placeholder="Equipment ID" name="equipment_id" required>
    </div>
    

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>