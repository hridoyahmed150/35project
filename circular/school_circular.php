<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php 
  include "circular_header.php";
  include "pag_circular.php";
  ?>


<div class="container">
<hr />
<h1>Circular</h1>
<hr />
<div align="right"><a href="school_circular_add.php">Add Circular Items</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Job Type</th>
      <th>Educational Qualification</th>
      <th>Required Experience</th>
      <th>Job Salary</th>
      <th>Job Location</th>
      <th>Job Time</th>
      
    </tr>
  </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from  school_circular";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th><a href='app_can.php?id=$row[id]'>$row[job_type]</a></th>
        <th>$row[educational_qualification]</th>
        <th>$row[required_experience]</th>
        <th>$row[job_salary]</th>
        <th>$row[job_location]</th>
        <th>$row[job_time]</th>
        
        <th><a href='school_circular_view.php?id=$row[id]'>View</a> | <a href='school_circular_edit.php?id=$row[id]'>Edit</a> | <a href='school_circular_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
   <!-- pagintion start -->
  <div id="pagination_controls" style="text-align:right;"><?php echo $paginationCtrls; ?>
    </div>
  <!-- pagination end -->  
</div>


<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>

