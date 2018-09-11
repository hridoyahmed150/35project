<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php 
  include "circular_header.php"; 
  include "pag_circular_exp.php";
?>
<div class="container">
<hr />
<h1>Circular Experience Information</h1>
<hr />
<div align="right"><a href="school_circular_app_exp_info_add.php">Add Circular Experience</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Company Name</th>
      <th>Designation</th>
      <th>Year</th>
      <th>Salary</th>
    </tr>
  </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from  school_circular_applicant_experience_information";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[company_name]</th>
        <th>$row[designation]</th>
        <th>$row[year]</th>
        <th>$row[salary]</th>
        <th><a href='school_circular_app_exp_info_view.php?id=$row[id]'>View</a> | <a href='school_circular_app_exp_info_edit.php?id=$row[id]'>Edit</a> | <a href='school_circular_app_exp_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
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