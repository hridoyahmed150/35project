<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Feedback Management System</h2>
<hr />  
  <form action="school_feedback_store.php" method="post">
 <div class="form-group">
      <label for=""> Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email"  required>
    </div>
    <div class="form-group">
      <label for="">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact" required>
    </div>
    <div class="form-group">
      <label for="">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject"  required>
    </div>

    <div class="form-group">
      <label for="">Comments:</label>
      <textarea class="form-control" id="comments" placeholder="Comments" name="comments" required>
      </textarea>
    </div>
    <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="cdate" placeholder="Date" name="cdate" required>
    </div>
<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>