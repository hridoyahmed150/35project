<div class="container">
<hr />
<h1>Circular Confirmation Management System</h1>
<hr />
<div align="right"><a href="school_circular_confirmation_manag_sys_add.php">Add Confirmation Management System</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Applicant Id</th>
      <th>Confirmation Message</th>
      <th>Joining Date</th>
      
    </tr>
  </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from  school_circular_confirmation_management_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[applicant_id]</th>
        <th>$row[confirmation_message]</th>
        <th>$row[joining_date]</th>
        
        <th><a href='school_circular_confirmation_manag_sys_view.php?id=$row[id]'>View</a> | <a href='school_circular_confirmation_manag_sys_edit.php?id=$row[id]'>Edit</a> | <a href='school_circular_confirmation_manag_sys_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>


