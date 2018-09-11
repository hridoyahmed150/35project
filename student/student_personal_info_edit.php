<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
 <?php include "student_header.php"; ?>

<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_std_pinfo where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit Student Personal Information</h2>
<hr />  
  <form action="student_personal_info_update.php" method="post">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">
            
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php print $row['name'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="pwd">Name of Father:</label>
      <input type="text" class="form-control" id="fname" placeholder="Name of Father" name="fname"  value="<?php print $row['father_name'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="">Name of Mother:</label>
      <input type="text" class="form-control" id="mname" placeholder="Name of Mother" name="mname" value="<?php print $row['mother_name'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="">Present Address:</label>
      <input type="text" class="form-control" id="paddress" placeholder="Present Address" name="paddress" value="<?php print $row['present_address'];  ?>"   required>
    </div>

    <div class="form-group">
      <label for="">Permanent Address:</label>
      <input type="text" class="form-control" id="praddress" placeholder="Permanent Address" name="praddress" value="<?php print $row['permanent_address'];  ?>"   required>
    </div>
    <div class="form-group">
      <label for="pwd">Religion:</label>
      <select class="form-control" id="religion" name="religion"  required>
      	<option  value="<?php print $row['religion'];  ?>"><?php print $row['religion'];  ?></option>        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddhist">Buddhist</option>
        <option value="Christian">Christian</option>
      </select>
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
      <label for="">Date of Birth:</label>
      <input type="date" class="form-control" id="dob" placeholder="" name="dob" value="<?php print $row['date_of_birth'];  ?>"  required>
    </div>

    <div class="form-group">
      <label for="pwd">Place Of Birth:</label>
      <input type="text" class="form-control" id="pob" placeholder="Place Of Birth" name="pob" value="<?php print $row['place_of_birth'];  ?>"  required>
    </div>
    <div class="form-group">
      <label for="pwd">Blood Group:</label>
      <input type="text" class="form-control" id="bgr" placeholder="Blood Group" name="bgr" value="<?php print $row['blood_group'];  ?>" >
    </div>    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>