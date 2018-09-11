<?php 
//@session_start();
//	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<div class="container">
<hr />
<h1>Employee Information Management System</h1>
<h2>Personal Information</h2>
<hr />
<div align="right"><a href="school_emp_info_add.php">Add Information</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Name</th>
        <th>Father Name</th>
        <th>Present Address</th>
        <th>Blood Group</th>
        <th>Action</th>       
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_emp_info";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[name]</th>
        <th>$row[father_name]</th>
        <th>$row[present_address]</th>
        <th>$row[blood_group]</th>
        <th><a href='student_per_info_view.php?id=$row[id]'>View</a> | <a href='student_personal_info_edit.php?id=$row[id]'>Edit</a> | <a href='student_per_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>
<?php // } else {
	//print "Please <a href='../login.php'>Login</a> to enter this page";	
//}
	?>



