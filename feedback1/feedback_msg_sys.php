<div align="center"><a href="#">Add New Feedback</a></div>
<table class="table table-striped">
	<tr>
		<th>Email</th>
        <th>Contact</th>
		<th>Subject</th>
		<th>Action</th>
        
    </tr>
<?php 
	//add header
	include "../header/recruit/recruit_header.php"; 
	//sql query for fetching data from table
	$sql = "select * from school_feedback" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
	
	
?>

	<tr>
		<th><?php print $row['email']; ?></th>
		<th><?php print $row['contact']; ?></th>
		<th><?php print $row['subject']; ?></th>
		<th><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




