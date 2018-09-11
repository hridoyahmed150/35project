<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Add Student Result Information</h2>
<hr />  
  <form action="result_info_store.php" method="post">
    <div class="form-group">
      <label for="email">Student Id:</label>
      <input type="text" class="form-control" id="student_id" placeholder="student_id" name="student_id" required>
    </div>
    <div class="form-group">
      <label for="pwd">Class:</label>
      <input type="text" class="form-control" id="class" placeholder="class" name="class" required>
    </div>

    <div class="form-group">
      <label for="">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="subject" name="subject" required>
    </div>
    <div class="form-group">
      <label for="">Mark:</label>
      <input type="number" class="form-control" id="mark" placeholder="mark" name="mark" required>
    </div>
   
    <div class="form-group">
      <label for="">Grade:</label>
      <select class="form-control" id="grade" 
      name="grade"   required>
      	<option value="">Select Grade</option>
        <option value="A+">A+</option>
        <option value="A">A</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B">B</option>
        <option value="B-">B-</option>  
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="F">F</option>              
      </select>      
    </div>   
  
    <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="cdate" placeholder="cdate" name="cdate" required>
    </div>

        <div class="form-group">
      <label for="">Exam Type:</label>
      <select class="form-control" id="exam_type" name="exam_type"  required>
      	<option value="">Select Exam Type</option>
        <option value="1st Term">1st Term</option>
        <option value="2nd Term">2nd Term</option>
        <option value="3rd Term">3rd Term</option>
        
      </select>
    </div>
    <div>   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>