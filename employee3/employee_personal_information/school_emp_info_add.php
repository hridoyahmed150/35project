<?php //@session_start();
	//if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h3><center><b>Add Employee  Personal Information</b></center></h3>
<hr />  
  <form action="school_emp_info_store.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
    <div class="form-group">
      <label for="father_name">Name of Father:</label>
      <input type="text" class="form-control" id="father_name" placeholder="Name of Father" name="father_name" required>
    </div>

    <div class="form-group">
      <label for="mother_name">Name of Mother:</label>
      <input type="text" class="form-control" id="mother_name" placeholder="Name of Mother" name="mother_name" required>
    </div>
    <div class="form-group">
      <label for="present_address">Present Address:</label>
      <input type="text" class="form-control" id="present_address" placeholder="Present Address" name="present_address"  required>
    </div>

    <div class="form-group">
      <label for="permanent_address">Permanent Address:</label>
      <input type="text" class="form-control" id="permanent_address" placeholder="Permanent Address" name="permanent_address" required>
    </div>
    <div class="form-group">
      <label for="religion">Religion:</label>
      <select class="form-control" id="religion" name="religion"  required>
      	<option value="">Select Religion</option>
        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddhist">Buddhist</option>
        <option value="Christian">Christian</option>
      </select>
    </div>
    <div class="form-group">
      <label for="nationality">Nationality:</label>
      <input type="text" class="form-control" id="nationality" placeholder="Nationality" name="nationality" required>
    </div>
    <div class="form-group">
      <label for="national_id">National ID:</label>
      <input type="text" class="form-control" id="national_id" placeholder="National ID" name="national_id" required>
    </div>

    <div class="form-group">
      <label for="gender">Gender:</label>
      <select class="form-control" id="gender" name="gender"  required>
      	<option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Common">Common</option>
      </select>
    </div>
    <div class="form-group">
      <label for="marital_status">Marital Status:</label>
      <input type="radio" class="form-control" id="marital_status" placeholder="" name="marital_status" value="Single" required>Single
      <input type="radio" class="form-control" id="marital_status" placeholder="" name="marital_status" value="Married" required>Married
      <input type="radio" class="form-control" id="marital_status" placeholder="" name="marital_status" value="Widow" required>Widow
      <input type="radio" class="form-control" id="marital_status" placeholder="" name="marital_status" value="Divorced" required>Divorced
    </div>
    <div class="form-group">
      <label for="blood_group">Blood Group:</label>
      <select class="form-control" id="blood_group" name="blood_group"  required>
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="O+">O+</option>
        <option value="O+">O-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
      </select>
    </div>    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php  //else {
	//print "Please <a href='../login.php'>Login</a> to enter this page";	
//}
	?>