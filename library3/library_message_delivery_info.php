
<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>

<div class="container">
<hr />
<h1>Library Message Delivery Information</h1>
<hr />
<div align="right"><a href="library_message_delivery_info_add.php">Add Message</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Member Id</th>
        <th>Message</th>
        <th>Address</th>
        <th>Date</th>
        <th>Reason</th>
      </tr>
    </thead>
	<?php
    //fetch data from table query
    $sql = "select * from school_message_delivery_management_system";
    //execute query
 	$result = mysqli_query($con,$sql);
    //fetch from table
    while($row = mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[member_id]</th>
        <th>$row[message]</th>
		<th>$row[address]</th>
        <th>$row[cdate]</th>
		<th>$row[reason]</th>
        <th><a href='library_message_delivery_info_view.php?id=$row[id]'>View</a> | <a href='library_message_delivery_info_edit.php?id=$row[id]'>Edit</a> | <a href='library_message_delivery_info_delete.php?id=$row[id]'onclick='return CheckDelete()'>Delete</a></th>
        
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


