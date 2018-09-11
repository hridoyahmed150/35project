<?php @session_start();
    if(isset($_SESSION['username']) && $_SESSION['department']=='attendance'){

 ?>
<?php 
  //add header
  include "attendance_header.php";
?>

<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
	//print $id ;
    //fetch data from table query
    $sql = "select * from attendance_management_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<hr />
  <div class="well text-center"><h2 style="color:#19bb19">Edit Student Attendance Information</h2></div>
<hr />  
  


<form class="form-horizontal" action="attendance_info_update.php" method="post">
	<input type="hidden" id="day" name="id"  value="<?php print $row['id'];  ?>"/>
   <div class="form-group">
    <label class="control-label col-sm-2" for="type">Type:</label>
    <div class="col-sm-6">
      <select class="form-control" id="type" name="type" required>
      <option  value="<?php print $row['type'];  ?>"><?php print $row['type'];  ?></option>
      	<option value="">Select type</option>
        <option value="student">Student</option>
        <option value="employee">Employee</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="stu_id">ID:</label>
    <div class="col-sm-6"> 
            <select class="form-control" id="stu_id" name="stu_id"  placeholder="Enter ID" >
      	<option value="<?php print $row['stu_id'];  ?>"><?php print $row['stu_id'];  ?></option>
        <?php  $result1 = mysqli_query($con,"select * from school_std_pinfo"); 
		while($row1=mysqli_fetch_array($result1)){
		?>
        	<option value="<?php print $row1['id'] ?>"><?php print $row1['id'] ?></option>
        <?php } ?>
              </select>
    	
    </div>
  </div>
         <div class="form-group">
          
            <label class="control-label col-sm-2" for="stu_id">Employee Id:</label>
            <div class="col-sm-6" >
            <select class="form-control" id="emp_id" name="emp_id"  placeholder="Employee ID" >
      	<option value="<?php print $row['emp_id'];  ?>"><?php print $row['emp_id'];  ?></option>
        <?php  $result2 = mysqli_query($con,"select * from school_emp_info"); 
		while($row2=mysqli_fetch_array($result2)){
		?>
        	<option value="<?php print $row2['id'] ?>"><?php print $row2['id'] ?></option>
        <?php } ?>
              </select>
    </div>    
    </div>  
<div class="form-group">
    <label class="control-label col-sm-2" for="day">Day:</label>
    <div class="col-sm-6"> 
       <input type="date" class="form-control" id="day" name="day" placeholder="" value="<?php print $row['day'];  ?>" required/>
    </div>
  </div>
 
  
    
    <div class="form-group">
    	
      <label class="control-label col-sm-2" for="Status">Status:</label>
      <div class="col-sm-6">
      <select class="form-control" id="sstatus" name="sstatus"  required>
      	<option  value="<?php print $row['sstatus'];?>"><?php print $row['sstatus'];  ?></option>  
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
        
      </select>
      </div>
    </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="entry_time">Entry Time:</label>
    <div class="col-sm-6">
      <input type="time" class="form-control" id="entry_time" name="entry_time" placeholder="" value="<?php print $row['entry_time'];  ?>" required>
    </div>
  </div>
	<div class="form-group">
    <label class="control-label col-sm-2" for="student_id">Exit Time:</label>
    <div class="col-sm-6">
      <input type="time" class="form-control" id="exit_time" name="exit_time" placeholder="" value="<?php print $row['exit_time'];  ?>" required>
    </div>
  </div>

  </div> 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" id="submit" name="" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>