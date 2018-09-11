
<hr />
<div align="center"><a href="add_new_cir.php">Add New Circular</a></div>
<hr />
<table class="table table-striped">
	<tr>
		<th>Job Type</th>
		<th>Education</th>
		<th>Salary</th>
		<th>Action</th>
        
    </tr>
    
<?php 
	//add header
	include "../header/recruit/recruit_header.php"; 
	//sql query for fetching data from table
	$sql = "select * from school_circular" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
	
	
?>
<script>
	$(document).ready(function(){
		$('#del').click(function(){
			alert("hi");	
			
		})
	});
</script>
	<tr>
		<th><?php print $row['job_type']; ?></th>
		<th><?php print $row['educational_qualification']; ?></th>
		<th><?php print $row['job_salary']; ?></th>
		<th><a href="#">View</a> | <a href="#">Edit</a> | <a href="delete_job_type.php?id=<?php echo $row['id']; ?>" >Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




