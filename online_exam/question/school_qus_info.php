<?php 
//@session_start();
//	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<div class="container">
<hr />
<h2><center><b>Question Information</b></center></h2>
<hr />
<div align="right"><a href="school_qus_add.php">Add Information</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
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
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_online_question";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <td>$row[class]</td>
        <td>$row[subject]</td>
        <td>$row[question]</td>
        <td>$row[correct_answer]</td>
		<td>$row[marks]</td>
        <th><a href='school_qus_view.php?id=$row[id]'>View</a> | <a href='school_emp_edu_info_edit.php?id=$row[id]'>Edit</a> | <a href='school_qus_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>
<?php // } else {
	//print "Please <a href='../login.php'>Login</a> to enter this page";	
//}
	?>



