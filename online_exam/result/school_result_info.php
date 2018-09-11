<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<div class="container">
<hr />
<h1>Result Information</h1>
<hr />
<div align="right"><a href="school_result_add.php">Add Result</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Student id</th>
        <th>Question id</th>
        <th>Answer code</th>
        <th>Action</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from online _exam_result";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[student_id]</th>
        <th>$row[question_id]</th>
        <th>$row[answer_code]</th>
        <th><a href='school_result_view.php?id=$row[id]'>View</a></th>
        </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>



