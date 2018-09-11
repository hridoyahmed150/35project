<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>

<?php include "employee_header.php"; ?>
	

<div class="container">
<hr />
  <h3><center><b>Add Employee Education Information</b></center></h3>
<hr />  
  <form action="school_emp_edu_info_store.php" method="post">

    <div class="form-group">
      <label for="email">Employee ID:</label>
      <select class="form-control" id="emp_id" placeholder="Employee ID" name="emp_id" required>
        <option value="">Employee ID</option>
        <?php  $result = mysqli_query($con,"select * from school_emp_info"); 
    while($row=mysqli_fetch_array($result)){
    ?>
          <option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
      </select>
    </div>    
    <div class="form-group">
      <label for="exam_type">Exam type:</label>
      <select class="form-control" id="exam_type" name="exam_type"  required>
        <option value="">Select</option>
        <option value="S.S.C">S.S.C</option>
        <option value="H.S.C">H.S.C</option>
        <option value="B.B.S">B.B.S</option>
        <option value="M.B.S">M.B.S</option>
        <option value="Diploma">Diploma</option>
      </select>
    </div>
    <div class="form-group">
      <label for="passing_year">Passing year:</label>
      <select class="form-control" id="passing_year" name="passing_year"  required>
        <option value="">Select</option>
        <option value="1988">1988</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
      </select>
    </div>

    <div class="form-group">
      <label for="board_or_university">Board or University:</label>
      <select class="form-control" id="board_or_university" name="board_or_university"  required>
        <option value="">Select</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Barishal">Barishal</option>
        <option value="Khulna">Khulna</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Jassore">Jassore</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Dinajpur">Dinajpur</option>
      </select>
    </div>
    <div class="form-group">
      <label for="result">Result:</label>
      <input type="text" class="form-control" id="result" placeholder="Result" name="result"  required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>