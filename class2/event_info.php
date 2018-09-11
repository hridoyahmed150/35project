<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='class'){

 ?>

<?php 
include "student_header.php"; 
include "pag_event_info.php"; 

?>
<div class="container">
<hr />
<h1>Event Management System</h1>
<hr />
<div align="right"><a href="event_info_add.php"> Add Participant's Entry</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Student id</th>
        <th>Event ID</th>
        <th>Topic type</th>
        <th>Status</th> 
        <th>Action</th> 
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    //$sql = "select * from school_event_participant";
    
    //execute query
    //$result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($nquery)){
		print "
        <tr>
        <th>$row[student_id]</th>
        <th>$row[event_id]</th>
		<th>$row[topic]</th>
        <th>$row[cstatus]</th>
        <th><a href='event_info_view.php?id=$row[id]'>View</a> | <a href='event_edit.php?id=$row[id]'>Edit</a> | <a href='event_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
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
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>

