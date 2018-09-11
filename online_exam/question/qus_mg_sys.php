<div align="center"><a href="#">Add Question</a></div>
<table class="table table-striped">
	<tr>
		<td>Class</td>
		<td>Subject </td>
		<td>Question </td>
		<td>Option 1</td>
        <td>Option 2</td>
        <td>Option 3</td>
        <td>Option 4</td>
        <td>Correct Answer</td>
        <td>Marks</td>
        <td>Action</td>
    </tr>
<?php 
	//add header
	include "../header/recruit/recruit_header.php"; 
	//sql query for fetching data from table
	$sql = "select * from school_online_question" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
	
	
?>

	<tr>
		<td><?php print $row['class']; ?></td>
        <td><?php print $row['subject']; ?></td>
        <td><?php print $row['question']; ?></td>
        <td><?php print $row['correct_answer']; ?></td>
        <td><?php print $row['marks']; ?></td>
		<td><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></td>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>	




