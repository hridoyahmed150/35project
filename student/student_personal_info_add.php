<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php include "student_header.php"; ?>
 
<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Add Student Personal Information</h2>
<hr />  
  <form action="student_personal_info_store.php" method="post">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
    <div class="form-group">
      <label for="pwd">Name of Father:</label>
      <input type="text" class="form-control" id="fname" placeholder="Name of Father" name="fname" required>
    </div>

    <div class="form-group">
      <label for="">Name of Mother:</label>
      <input type="text" class="form-control" id="mname" placeholder="Name of Mother" name="mname" required>
    </div>
    <div class="form-group">
      <label for="">Present Address:</label>
      <input type="text" class="form-control" id="paddress" placeholder="Present Address" name="paddress"  required>
    </div>

    <div class="form-group">
      <label for="">Permanent Address:</label>
      <input type="text" class="form-control" id="praddress" placeholder="Permanent Address" name="praddress" required>
    </div>
    <div class="form-group">
      <label for="pwd">Religion:</label>
      <select class="form-control" id="religion" name="religion"  required>
      	<option value="">Select Religion</option>
        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddhist">Buddhist</option>
        <option value="Christian">Christian</option>
      </select>
    </div>

    <div class="form-group">
      <label for="">Gender:</label>
      <select class="form-control" id="gender" name="gender"  required>
      	<option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Common">Common</option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Date of Birth:</label>
      <input type="date" class="form-control" id="dob" placeholder="" name="dob" required>
    </div>

    <div class="form-group">
      <label for="pwd">Place Of Birth:</label>
      <input type="text" class="form-control" id="pob" placeholder="Place Of Birth" name="pob" required>
    </div>
    <div class="form-group">
      <label for="pwd">Blood Group:</label>
      <input type="text" class="form-control" id="bgr" placeholder="Blood Group" name="bgr">
    </div>    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>