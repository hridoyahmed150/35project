<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<div class="container">
<hr />
<h1>Notice Information</h1>
<hr />
<div align="right"><a href="notice.php">Add Notice</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Type</th>
        <th>Publish Date</th>
        <th>Subject</th>
        <th>Action</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_notice";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[type]</th>
        <th>$row[publish_date]</th>
        <th>$row[subject]</th>
        <th><a href='notice_view.php?id=$row[id]'>View</a> | <a href='notice_edit.php?id=$row[id]'>Edit</a> | <a href='school_notice_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
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



