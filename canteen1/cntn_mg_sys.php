<div align="center"><a href="#">Add New Circular</a></div>
<table class="table table-striped">
	<tr>
		<th>Student Name</th>
		<th>Contact</th>
		<th>Amount</th>
		<th>Action</th>
        
    </tr>
<?php 
	//add header
	include "../header/canteen/canteen_header.php"; 
	//sql query for fetching data from table
	$sql = "select * from school_canteen" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
	
	
?>

	<tr>
		<th><?php print $row['student_name']; ?></th>
		<th><?php print $row['contact']; ?></th>
		<th><?php print $row['amount']; ?></th>
		<th><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




