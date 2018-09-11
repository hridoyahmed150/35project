
<hr />
<div align="center"><a href="add_new_cir.php"><h1>Add New Circular</h1></a></div>
<hr />
<table class="table table-striped" style="text-align: center;">
	<tr>
		<th>id</th>
		<th>student_id</th>
		<th>paid_date</th>
        <th>paid_month</th>
        <th>paid_year</th>
        <th>fee_paid</th>
        <th>paid_status</th>
       
        <th>comments</th>
    </tr>
    
<?php 
	//add header
	include "../header/tution_fee/tution_fee_header.php";
	//sql query for fetching data from table
	$sql = "select * from school_tution_fee" ;
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
		<th><?php print $row['id']; ?></th>
		<th><?php print $row['student_id']; ?></th>
		<th><?php print $row['paid_date']; ?></th>
		<th><?php print $row['paid_month']; ?></th>
		<th><?php print $row['paid_year']; ?></th>
		<th><?php print $row['fee_paid']; ?></th>
		 
		<th><?php print $row['paid_status']; ?></th>
		<th><?php print $row['comments']; ?></th>
		<th><a href='tution_per_info_view.php?id=$row[id]'>View</a> | <a href='student_personal_info_edit.php?id=$row[id]'>Edit</a> | <a href='student_per_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>












