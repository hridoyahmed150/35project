<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php 
include "student_header.php"; 

include "pag_stu_education_info.php"; 

?>
 
<div class="container">
<hr />
<h1>Student Personal Information</h1>
<hr />
<div align="right"><a href="student_education_info_add.php">Add Student</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Std Id</th>
        <th>Prev School</th>
        <th>Reason</th>
        <th>Result</th>
        <th>Enrolled</th>
        <th>Adm Date</th>        
        <th>Action</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    //$sql = "select * from school_std_education";
    
    //execute query
    //$result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($nquery)){
		print "
        <tr>
        <th>$row[std_id]</th>
        <th>$row[previous_school_name]</th>
        <th>$row[reason_leaving_previous_school]</th>
        <th>$row[result_previous_school]</th>
        <th>$row[first_enrolled_class]</th>
        <th>$row[admission_date]</th>
				
        <th><a href='student_edu_info_edit.php?id=$row[id]'>Edit</a> | <a href='student_edu_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
  <!-- pagintion start -->
	<div id="pagination_controls" style="text-align:right;">		<?php echo $paginationCtrls; ?>
    </div>
  <!-- pagination end -->    
</div>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>



