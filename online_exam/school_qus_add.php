<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Add Question Information</h2>
<hr />  
  <form action="school_qus_store.php" method="post">
    <div class="form-group">
      <label for="email">Class:</label>
      <input type="text" class="form-control" id="name" placeholder="Class" name="class" required>
    </div>
    <div class="form-group">
      <label for="pwd">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
    </div>

    <div class="form-group">
      <label for="">Question:</label>
      <input type="text" class="form-control" id="question" placeholder="Question" name="question" required>
    </div>
    <div class="form-group">
      <label for="">Present Address:</label>
      <input type="text" class="form-control" id="paddress" placeholder="Present Address" name="paddress"  required>
    </div>

    <div class="form-group">
      <label for="">Correct Answer:</label>
      <input type="text" class="form-control" id="answe" placeholder="Correct Answer" name="correct_answer" required>
    </div>
 
    <div class="form-group">
      <label for="">Marks:</label>
      <input type="date" class="form-control" id="marks" placeholder="Marks" name="marks" required>
    </div>   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>