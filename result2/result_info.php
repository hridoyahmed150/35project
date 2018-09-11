<?php
    @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){
 ?>
<div class="container">
<hr />
<h1>Student Result Information</h1>
<hr />
<div align="right"><a href="result_info_add.php">Add Result</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Student Id</th>
        <th>Class</th>
        <th>Subject</th>
        <th>Mark</th>
        <th>Action</th>
    </tr>
  </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_result";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row = mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[student_id]</th>
        <th>$row[class]</th>
        <th>$row[subject]</th>
		<th>$row[mark]</th>
        <th><a href='result_view.php?id=$row[id]'>View</a> | <a href='result_info_edit.php?id=$row[id]'>Edit</a> | <a href='result_delete.php?id=$row[id]' onclick='return checkDelete()'>Delete</a></th>
        
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



