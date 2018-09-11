<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='result'){

 ?>
 <?php 
include "result_header.php"; 


	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_std_result where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row = mysqli_fetch_array($result);			
?>
<div class="container">
<hr />
<h2>Edit Student Result Information</h2>
<hr />  
    <form action="result_info_update.php" method="post">
    <div class="form-group">
    <input type="hidden" id="id" name="id" value="<?php print $_GET['id']; ?>"
      <label for="email">Student Id:</label>
      <input type="text" class="form-control" id="student_id" placeholder="Student Id" name="student_id" required 
      value="<?php print $row['student_id']; ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Class:</label>
      <input type="text" class="form-control" id="class" placeholder="Name of Father" name="class" required
      value="<?php print $row['class']; ?>"
      >
    </div>

    <div class="form-group">
      <label for="">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="subject" name="subject" 
      value="<?php print $row['subject']; ?>" required>
    </div>
    <div class="form-group">
      <label for="">Mark:</label>
      <input type="text" class="form-control" id="mark" placeholder="mark" name="mark" 
      value="<?php print $row['mark']; ?>"  required>
    </div>
   
    <div class="form-group">
      <label for="">Grade:</label>
      <select class="form-control" id="grade" 
      name="grade"   required>
      	<option value="<?php print $row['grade']; ?>"><?php print $row['grade']; ?></option>
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
      <input type="date" class="form-control" id="cdate" placeholder="" name="cdate" value="<?php print $row['cdate']; ?>" required>
    </div>

        <div class="form-group">
      <label for="">Exam Type:</label>
      <select class="form-control" id="exam_type" name="exam_type"  required>
      	<option value="<?php print $row['exam_type']; ?>"><?php print $row['exam_type']; ?></option>
        <option value="1st Term">1st Term</option>
        <option value="2nd Term">2nd Term</option>
        <option value="3rd Term">3rd Term</option>
        
      </select>
    </div>
    <div>   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>