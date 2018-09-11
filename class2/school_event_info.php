<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='class'){

 ?>

<?php include "student_header.php"; ?>
<div class="container">
<hr />
<h1>Event Management System</h1>
<hr />
<div align="right"><a href="school_event_info_add.php">Add Event Entry</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Event Name</th>
        <th>Date of event</th>
        <th>Location</th>
        <th>Time</th> 
        <th>Status</th>
        <th>Action</th> 
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_event_info";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[event_name]</th>
        <th>$row[date_of_event]</th>
		<th>$row[location]</th>
		<th>$row[time]</th>
        <th>$row[cstatus]</th>
        <th><a href='school_event_info_view.php?id=$row[id]'>View</a> | <a href='school_event_info_edit.php?id=$row[id]'>Edit</a> | <a href='school_event_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>



