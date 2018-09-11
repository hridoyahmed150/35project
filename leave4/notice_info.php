<?php include "student_leave_header.php"; ?>

<div class="container">
<hr />
  <h2>Notice Info</h2>
<hr />  
  <form action="student_leave_info_store.php" method="post">

    <div class="form-group">
      <label for="email">Subject:</label>
      <input type="subject" class="form-control" id="subject" placeholder="subject" name="subject">
    </div>

    <div class="form-group">
      <label for="des">Description:</label>
	  <textarea class="form-control" rows="5" id="Des"></textarea>    
	 </div>
    <div class="form-group">
      <label for="pd">Publish Date:</label>
      <input type="Date" class="form-control" id="pd" placeholder="Publish Date" name="Publish Date">
    </div>

    <div class="form-group">
         <label for="ed">Expire Date:</label>
      <input type="Date" class="form-control" id="ed" placeholder="Expire Date" name="Expire Date">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>




