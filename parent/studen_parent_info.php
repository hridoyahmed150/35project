<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<div class="container">
<hr />
<h1>Student parent Information</h1>
<hr />
<div align="right"><a href="student_parent_info_add.php">Add Student</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Student ID</th>
        <th>Profession</th>
        <th>Office location</th>
        <th>Monthly income</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from parents_management_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[student_id]</th>
        <th>$row[profession]</th>
        <th>$row[office_location]</th>
        <th><a href='student_parent_info_view.php?student_id=$row[student_id]'>View</a> | <a href='student_parent_info_edit.php?student_id=$row[student_id]'>Edit</a> | <a href='student_parent_info_delete.php?student_id=$row[student_id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>



