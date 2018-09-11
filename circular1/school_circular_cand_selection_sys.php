<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php 
  include "circular_header.php";
  include "pag_circular_selection.php";
?>
  
<div class="container">
<hr />
<h1>Candidate Selection System</h1>
<hr />
<div align="right"><a href="school_circular_cand_selection_sys_add.php">Add Circular Selection</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Applicant Id</th>
      <th>Interview Time</th>
      <th>Interview Location</th>
      <th>Message Applicant</th>
    </tr>
  </thead>
  <?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from  school_circular_candidate_selection_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
    print "
        <tr>
        <th>$row[applicant_id]</th>
        <th>$row[interview_time]</th>
        <th>$row[interview_location]</th>
        <th>$row[message_applicant]</th>
        <th><a href='school_circular_cand_selection_sys_view.php?id=$row[id]'>View</a> | <a href='school_circular_cand_selection_sys_edit.php?id=$row[id]'>Edit</a> | <a href='school_circular_cand_selection_sys_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
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