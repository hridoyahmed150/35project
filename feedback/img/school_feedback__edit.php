<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_feedback where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit Feedback Management System</h2>
<hr />  
  <form action="school_feedback_update.php" method="post">
    <div class="form-group">
      <label for="id"> Email:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">
      <input type="email" class="form-control" id="email" placeholder=" Email" name=" email" value="<?php print $row['email'];  ?>" required>
          </div>
          <div class="form-group">
      <label for="">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact" value="<?php print $row['contact'];  ?>"   required>
    </div>
    
    <div class="form-group">
      <label for="">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" value="<?php print $row['subject'];  ?>"   required>
    </div>

    <div class="form-group">
      <label for="">Comments:</label>
      <textarea class="form-control" id="comments" placeholder="Comments" name="comments" required>
      <?php print trim($row['comments']);  ?>
      </textarea>
    </div>
    <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Date" name="date" value="<?php print $row['cdate'];  ?>" required>
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>