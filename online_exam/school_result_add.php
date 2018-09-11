<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Result System</h2>
<hr />  
  <form action="school_result_store.php" method="post">
 <div class="form-group">
      <label for=""> Student id:</label>
      <input type="text" class="form-control" id="id" placeholder="Student id" name="student_id"  required>
    </div>
    <div class="form-group">
      <label for="">Question id:</label>
      <input type="text" class="form-control" id="id" placeholder="Question id" name="question_id" required>
    </div>
    <div class="form-group">
      <label for="">Answer code:</label>
      <input type="text" class="form-control" id="code" placeholder="Answer code" name="answer_code"  required>
    </div>

<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>