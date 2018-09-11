<div align="center"><a href="#">Add leave</a></div>
<table class="table table-striped">
	<tr>
		<th>cstatus</th>
		<th>leave_type</th>
		<th>leave_start_date</th>
		<th>leave_end_date</th>
		<th>employee_id</th>
        
    </tr>
<?php 
	//add header
	include "../header/leave/leave_header.php"; 
	//sql query for fetching data from table
	$sql = "select * from school_leave_management_system" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
	
	
?>

	<tr>
		<th><?php print $row['cstatus']; ?></th>
		<th><?php print $row['leave_type']; ?></th>
		<th><?php print $row['leave_start_date']; ?></th>
		<th><?php print $row['leave_end_date']; ?></th>
		<th><?php print $row['employee_id']; ?></th>
		<th><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




