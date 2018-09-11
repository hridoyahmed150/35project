<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<div class="container">
<hr />
<h1>School Canteen Information</h1>
<hr />
<div align="right"><a href="school_canteen_info_add.php">Add Canteen</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Leaser_Name</th>
		<th>Amount</th>
		<th>Contact</th>
		<th>Action</th>
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_canteen";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[student_name]</th>
        <th>$row[amount]</th>
        <th>$row[contact]</th>
        <th><a href='school_canteen_info_view.php?id=$row[id]'>View</a> | <a href='school_canteen_info_edit.php?id=$row[id]'>Edit</a> | <a href='school_canteen_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
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



