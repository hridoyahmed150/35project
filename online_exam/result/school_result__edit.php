<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from online _exam_result where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	

<div class="container">
<hr />
  <h2>Edit Result System</h2>
<hr />  
  <form action="school_result_update.php" method="post">
    <div class="form-group">
      <label for="id"> Student id:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $_GET['id'];  ?>">
      <input type="text" class="form-control" id="id" placeholder=" Student id" name=" student_id" value="<?php print $row['student_id'];  ?>" required>
          </div>
          <div class="form-group">
      <label for="">Question id:</label>
      <input type="text" class="form-control" id="id" placeholder="Question id" name="question_id" value="<?php print $row['question_id'];  ?>"   required>
    </div>
    
    <div class="form-group">
      <label for="">Answer code:</label>
      <input type="text" class="form-control" id="code" placeholder="Answer code" name="answer_code" value="<?php print $row['answer_code'];  ?>"   required>
    </div>
    <div class="form-group">
      <label for=""> Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Date" name="date" required>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>