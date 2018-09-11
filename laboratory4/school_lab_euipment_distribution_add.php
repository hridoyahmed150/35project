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
              <option value="select">Select</option>
              <option value='101'>101</option>
              <option value='102'>102</option>
              <option value='103'>103</option>
              <option value='104'>104</option>
              <option value='105'>105</option>
              <option value='106'>106</option>
              <option value='107'>107</option>
              <option value='108'>108</option>
              <option value='109'>109</option>
              <option value='110'>110</option>
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
              <option value="select">Select</option>
              <option value='101'>101</option>
              <option value='102'>102</option>
              <option value='103'>103</option>
              <option value='104'>104</option>
              <option value='105'>105</option>
              <option value='106'>106</option>
              <option value='107'>107</option>
              <option value='108'>108</option>
              <option value='109'>109</option>
              <option value='110'>110</option>
          </select>
    </div>


   
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>