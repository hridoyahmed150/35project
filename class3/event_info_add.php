<?php
    //adding header
    include "../header.php";
?>	
<div class="container">
<hr />
  <h1 align="center">Event Management System</h1>
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
      
      <select class="form-control" id="event_id" name="event_id" required>
      	<option value="">Event</option>
        <?php  $result = mysqli_query($con,"select * from school_event_info"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['id'] ?>"><?php print $row['event_name'] ?></option>
        <?php } ?>
      </select>       
    </div>

    <div class="form-group">
     <label for="pwd">Topic:</label>
      <select class="form-control" id="topic" name="topic"  required>
      	<option value="">Topic</option>
        <?php  $result = mysqli_query($con,"select * from school_event_info"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['topic'] ?>"><?php print $row['topic'] ?></option>
        <?php } ?>
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
