<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Notice Management System</h2>
<hr />  
  <form action="school_notice_store.php" method="post">
     <div class="form-group">
      <label for="pwd">Type:</label>
      <select class="form-control" id="type" name="type"  required>
        <option value="All">All</option>
        <option value="Employee">Employee</option>
        <option value="Teacher">Teacher</option>
        <option value="Student">Student</option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Publish Date:</label>
      <input type="date" class="form-control" id="publish_date" placeholder="Publish" name="publish_date" required>
    </div>

    <div class="form-group">
      <label for="">Expire Day:</label>
      <input type="date" class="form-control" id="expire_date" placeholder="Expire" name="expire_date" required>
    </div>
    <div class="form-group">
      <label for="">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject"  required>
    </div>

    <div class="form-group">
      <label for="">Description:</label>
      <textarea class="form-control" id="description" placeholder="Description" name="description" required>
      </textarea>
    </div>
<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>