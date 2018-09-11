
<?php 
  //add header
  include "attendance_header.php";
?>
  
    <div class="well text-center text-info"><h2 class="text-info">Teacher/Student Attendance</h2></div>
  
    <div class="row">
      <form class="form-horizontal" action="attendance_info_store.php" method="post">
         <div class="form-group">
          <label class="control-label col-sm-2" for="type">Type:</label>
          <div class="col-sm-6">
            <select class="form-control" id="type" name="type" required>
            	<option value="">Select type</option>
              <option value="student">Student</option>
              <option value="employee">Employee</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="stu_id">ID:</label>
          <div class="col-sm-6"> 
             <input type="number" class="form-control" id="stu_id" name="stu_id" placeholder="Enter ID" required/>
          </div>
        </div>
      <div class="form-group">
          <label class="control-label col-sm-2" for="day">Day:</label>
          <div class="col-sm-6"> 
             <input type="text" class="form-control" id="day" name="day" placeholder="" value="<?php $cur_date = date('y-m-d'); echo $cur_date; ?>"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="sstatus">Status:</label>
              <div class="col-sm-6"> 
              <input type="radio"  id="sstatus" name="sstatus" required value="present" />Present
              <input type="radio" id="sstatus" name="sstatus" required  value="absent" />Absent
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="entry_time">Entry Time:</label>
          <div class="col-sm-6">
            <input type="time" class="form-control" id="entry_time" name="entry_time" value="" placeholder="" required>
          </div>
        </div>
      	<div class="form-group">
          <label class="control-label col-sm-2" for="student_id">Exit Time:</label>
          <div class="col-sm-6">
            <input type="time" class="form-control" id="exit_time" name="exit_time" placeholder="" required>
          </div>
      
        </div> 
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" id="submit" name="" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
 </div>

<?php include "../footer.php"; ?>

