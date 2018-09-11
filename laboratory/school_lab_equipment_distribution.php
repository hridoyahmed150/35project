<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='laboratory'){

 ?>
 <?php 
include "laboratory_header.php"; 
include "pag_lab_equipment_distriution.php";


?>
<div class="container">
<hr />
<h1>Lab Equipment Distribution</h1>
<hr />
<div align="right"><a href="school_lab_euipment_distribution_add.php">Add Equipment Distribution</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Student ID</th>
        <th>Receive Date</th>
        <th>Submission Date</th>
        <th>Equipment ID</th>
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from  school_lab_euipment_distribution";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[student_id]</th>
        <th>$row[receive_date]</th>
        <th>$row[submission_date]</th>
        <th>$row[equipment_id]</th>
        <th><a href='school_lab_euipment_distribution_view.php?id=$row[id]'>View</a> | <a href='school_lab_euipment_distribution_edit.php?id=$row[id]'>Edit</a> | <a href='school_lab_euipment_distribution_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
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
<?php include "laboratory_footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>



