<div align="center"><a href="#">member</a></div>
<table class="table table-striped">
	<tr>
		<th>type</th>
		<th>member_id</th>
		<th>user_name</th>
		<th>password</th>
		
        
    </tr>
<?php 
	//add header
	include "../header/member/member_header.php"; 
	//sql query for fetching data from table
	$sql = "select * from school_membership_management_system" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
	
	
?>

	<tr>
		<th><?php print $row['type']; ?></th>
		<th><?php print $row['member_id']; ?></th>
		<th><?php print $row['user_name']; ?></th>
		<th><?php print $row['password']; ?></th>
		
		<th><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




