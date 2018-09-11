<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>
 
<?php
    //adding header
 include "employee_header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_emp_info where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2><center>Edit Employee Personal Information</center></h2>
<hr />  
  <form action="school_emp_info_update.php" method="post">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">
            
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php print $row['name'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="father_name">Name of Father:</label>
      <input type="text" class="form-control" id="father_name" placeholder="Name of Father" name="father_name" value="<?php print $row['father_name'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="mother_name">Name of Mother:</label>
      <input type="text" class="form-control" id="mother_name" placeholder="Name of Mother" name="mother_name" value="<?php print $row['mother_name'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="">Present Address:</label>
      <input type="text" class="form-control" id="present_address" placeholder="Present Address" name="present_address" value="<?php print $row['present_address'];  ?>"   required>
    </div>

    <div class="form-group">
      <label for="permanent_address">Permanent Address:</label>
      <input type="text" class="form-control" id="permanent_address" placeholder="Permanent Address" name="permanent_address" value="<?php print $row['permanent_address'];  ?>"   required>
    </div>
    <div class="form-group">
      <label for="religion">Religion:</label>
      <select class="form-control" id="religion" name="religion"  required>
      	<option  value="<?php print $row['religion'];  ?>">
          <?php print $row['religion'];  ?></option>
        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddhist">Buddhist</option>
        <option value="Christian">Christian</option>
      </select>
    </div>

    <div class="form-group">
      <label for="nationality">Nationality:</label>
      <input type="text" class="form-control" id="nationality" placeholder="Nationality" name="nationality" value="<?php print $row['nationality'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="national_id">National ID:</label>
      <input type="text" class="form-control" id="national_id" placeholder="National ID" name="national_id" value="<?php print $row['national_id'];  ?>" required>
    </div>    

    <div class="form-group">
      <label for="">Gender:</label>
      <select class="form-control" id="gender" name="gender"  required>
      	<option  value="<?php print $row['gender'];  ?>"><?php print $row['gender'];  ?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Common">Common</option>
      </select>
    </div>
    <div class="form-group">
      <label for="marital_status">Marital Status:</label>
      <?php print $row['marital_status']; if($row['marital_status']=='Single'){  ?>
      <input type="radio" class="form-control" id="marital_status" placeholder="" name="marital_status" value="Single" checked="checked">Single      
      <?php } else { ?>
      <input type="radio" class="form-control" id="marital_status" placeholder="" name="marital_status" value="Single" required>Single
	  <?php } ?>
      <input type="radio" class="form-control" id="marital_status" placeholder="" name="marital_status" value="Married" required>Married
      <input type="radio" class="form-control" id="marital_status" placeholder="" name="marital_status" value="Widow" required>Widow
      <input type="radio" class="form-control" id="marital_status" placeholder="" name="marital_status" value="Divorced" required>Divorced
    </div>

    <div class="form-group">
      <label for="blood_group">Blood Group:</label>
      <select class="form-control" id="blood_group" name="blood_group" required>
      	<option  value="<?php print $row['blood_group'];  ?>">
          <?php print $row['blood_group'];  ?></option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="O+">O+</option>
        <option value="O+">O-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
      </select>
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>