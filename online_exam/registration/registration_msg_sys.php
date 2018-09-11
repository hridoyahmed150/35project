<div align="center"><a href="#">Add New Registration</a></div>
<table class="table table-striped">
	<tr>
		<th>Student id</th>
        <th>User name</th>
		<th>Password</th>
		<th>Action</th>
        
    </tr>
<?php 
	//add header
	include "../header/recruit/recruit_header.php"; 
	//sql query for fetching data from table
	$sql = "select * from school_online_registration" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
	
	
?>

	<tr>
		<th><?php print $row['student_id']; ?></th>
		<th><?php print $row['user_name']; ?></th>
		<th><?php print $row['password']; ?></th>
		<th><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




