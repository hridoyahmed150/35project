<?php
    //adding header
    include "../header.php";
?>	
<div class="container">
<hr />
  <h2 align="center">Event Management System</h2>
  <h2 align="center">Event Entry</h2>
<hr /> 

  <form action="school_event_info_store.php" method="post">
  <div class="form-group">
     <label for="pwd" style="color:#660000">Event Name:</label>
      <select class="form-control" id="event_name" name="event_name"  required>
      	<option value="">Select Event Name</option>
        <option value="Cultural Program">Cultural Program</option>
        <option value="National program">National program</option>
        <option value="Annual program">Annual program</option>
        <option value="Debate program">Debate program</option>
        <option value="Re-union">Re-union</option>
        <option value="Picnic">Picnic</option>
        <option value="Rag-day">Rag-day</option>
        <option value="Fresher program">Fresher program</option>
      </select>
    </div>
  <div class="form-group">
     <label for="pwd">Topic:</label>
  <input type="text" name="topic" id="topic" value="" class="form-control" />
  </div>  
  <div class="form-group">
     <label for="pwd">Date of event:</label>
  <input type="date" name="date_of_event" id="date_of_event" value="" class="form-control" />
  </div>
  
  
    <div class="form-group">
     <label for="pwd">Location:</label>
  <input type="text" name="location" id="location" value="" class="form-control" />
    </div>
    
    
    <div class="form-group">
     <label for="pwd">Time:</label>
      <input type="time" name="time" id="time" value=""  class="form-control"/>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    
    </form>
    </div>
