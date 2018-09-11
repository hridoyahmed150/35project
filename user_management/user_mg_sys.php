<div align="center"><a href="#">User Management System</a></div>
<table class="table table-striped">
	<tr>
		<th>username</th>
		<th>Password</th>
		<th>Department</th>
    </tr>
<?php 
	//add header
	include "../header/usermanagement/user_management_header.php"; 
	//sql query for fetching data from table
	$sql = "select * from school_user_info" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
	
	
?>

	<tr>
		<th><?php print $row['username ']; ?></th>
		<th><?php print $row['Password']; ?></th>
        <th><?php print $row['Department']; ?></th>
		<th><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




