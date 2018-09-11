<div align="center"><a href="#">Notice Management System</a></div>
<table class="table table-striped">
	<tr>
		<th>Type</th>
		<th>Publish</th>
		<th>Expire</th>
		<th>Subject</th>
        <th>Description</th>
        
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
		<th><?php print $row['type ']; ?></th>
		<th><?php print $row['publish_date']; ?></th>
        <th><?php print $row['expire_date']; ?></th>
		<th><?php print $row['subject']; ?></th>
        <th><?php print $row['description']; ?></th>
		<th><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




