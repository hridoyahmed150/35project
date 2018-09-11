<div align="center"><a href="#">Add New Result</a></div>
<table class="table table-striped">
	<tr>
		<td>Student id</td>
        <td>Question id</td>
		<td>Answer code</td>
        <td>Date</td>
		<td>Action</td>
        
    </tr>
<?php 
	//add header
	include "../header/recruit/recruit_header.php"; 
	//sql query for fetching data from table
	$sql = "select * from online _exam_result" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
	
	
?>

	<tr>
		<td><?php print $row['student_id']; ?></td>
		<td><?php print $row['question_id']; ?></td>
		<td><?php print $row['answer_code']; ?></td>
        <td><?php print $row['date']; ?></td>
		<td><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></td>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




