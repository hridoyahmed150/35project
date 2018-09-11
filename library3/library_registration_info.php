
<?php @session_start();
    if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>

<div class="container">
<hr />
<h1>Library Registration System</h1>
<hr />
<div align="right"><a href="library_registration_info_add.php">Registration Here</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Name</th>
        <th>User Name</th>
        <th>Image</th>
        <th>Contact</th>
        <th>Type</th>
        <th>Password</th>
        <th>Address</th>
      </tr>
    </thead>
	<?php
    //fetch data from table query
    $sql = "select * from school_libr_registration_management_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[name]</th>
        <th>$row[user_name]</th>
        <th>$row[image]</th>
		<th>$row[contact]</th>
		<th>$row[type]</th>
		<th>$row[password]</th>
		<th>$row[address]</th>
		
        <th><a href='library_registration_info_view.php?id=$row[id]'>View</a> | <a href='library_registration_info_edit.php?id=$row[id]'>Edit</a> | <a href='library_registration_info_delete.php?id=$row[id]'onclick='return CheckDelete()'>Delete</a></th>
      </tr>";
    }
    
    ?>
    </tbody>
  </table>
</div>
<?php include "../footer.php"; ?>
<?php } else {
    print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>


