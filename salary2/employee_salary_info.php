<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<div class="container">
<hr />
<h1>Student Personal Information</h1>
<hr />
<div align="right"><a href="employee_salary_info_add.php">Add Salary</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Designation</th>
        <th>Basic Salary</th>
        <th>Month</th>
        <th>employee_id</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from salary_management_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[designatio]</th>
        <th>$row[basic_salary]</th>
        <th>$row[month]</th>
        <th>$row[employee_id]</th>
		
        <th><a href='employee_salary_info_view.php?id=$row[id]'>View</a> | <a href='employee_salary_info_edit.php?id=$row[id]'>Edit</a> | <a href='employee_salary_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
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



