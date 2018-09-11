<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_leave_management_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);
				
?>	


<div class="container">
<hr />
  <h2>Edit Employee leave Information</h2>
<hr />  
  <form action="employee_leave_info_update.php" method="post">
    <div class="form-group">
      <label for="cstatus">cstatus</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">
    </div>
	
    <div class="form-group">
      <label for="leave type">leave type</label>
      <select class="form-control" id="leave_type" name="leave_type"  required>
      	<option  value="<?php print $row['leave_type'];  ?>">
		<?php print $row['leave_type'];  ?></option>        
		<option value="sick leave">sick leave</option>
        <option value="casual leave">casual leave</option>
        <option value="annual leave">annual leave</option>

      </select>
    </div>

    <div class="form-group">
      <label for="leave start date">leave start date</label>
      <input type="date" class="form-control" id="leave_start_date" 
	  placeholder="leave start date" name="leave_start_date" 
	  value="<?php print $row['leave_start_date'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="">leave_end_date</label>
      <input type="date" class="form-control" id="leave_end_date" placeholder="leave end date" name="leave_end_date" value="<?php print $row['leave_end_date'];  ?>"   required>
    </div>

    <div class="form-group">
      <label for="employee id">employee id</label>
      <select class="form-control" id="employee_id" name="employee_id"  required>
      	<option  value="<?php print $row['employee_id'];  ?>">
		<?php print $row['employee_id'];  ?></option>        
        <?php  $result = mysqli_query($con,"select * from school_leave_management_system"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>