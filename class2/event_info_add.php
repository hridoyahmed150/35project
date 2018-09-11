<?php
    //adding header
    include "../header.php";
?>	
<div class="container">
<hr />
  <h2 align="center">Event Management System</h2>
  <h2 align="center">Participant's Entry</h2>
<hr /> 

  <form action="event_info_store.php" method="post">
    <div class="form-group">
     <label for="pwd">Student ID:</label>

      
      <select class="form-control" id="student_id" placeholder="Student ID" name="student_id" required>
      	<option value="">Student ID</option>
        <?php  $result = mysqli_query($con,"select * from school_std_pinfo"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
      </select>      
    </div>
    <div class="form-group">
     <label for="pwd">Event ID:</label>
      <input type="number" name="event_id" id="event_id" value=""  class="form-control"/>
    </div>

    <div class="form-group">
     <label for="pwd">Topic:</label>
      <select class="form-control" id="topic" name="topic"  required>
      	<option value="">Select Topic</option>
        <option value="Debate">Debate</option>
        <option value="Drama">Drama</option>
        <option value="Long jump">Long jump</option>
        <option value="Discuss">Discuss</option>
      </select>
    </div>
<div class="form-group">
     <label for="pwd">Status:</label>
      <select class="form-control" id="cstatus" name="cstatus"  required>
      	<option value="">Select Status</option>
        <option value="Interested">Interested</option>
        <option value="Selected">Selected</option>
        <option value="Not selected">Not selected</option>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    
    </form>
    </div>
