<div class="container">
<hr />
<h1>Student leave Information</h1>
<hr />
<div align="right"><a href="student_leave_info_add.php">Add Student</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Type</th>
        <th>Start Date</th>
        <th>End Date</th>
		<th>Employee ID</th>
		<th>Action</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_leave_management_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[leave_type]</th>
        <th>$row[leave_start_date]</th>
		<th>$row[leave_end_date]</th>
		<th>$row[employee_id]</th>
		<th><a href='student_leave_info_view.php?id=$row[id]'>View</a> | <a href='student_leave_info_edit.php?id=$row[id]'>Edit</a> | <a href='student_per_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>


