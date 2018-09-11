<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
  include "circular_header.php";
	
?>
<div class="container">
<hr>
<h3>Applied Candidate Information</h3>
<hr />
<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Action</th>

      
    </tr>
  </thead>
<?php

	$id = $_GET['id'];
	include "../db/dbcon.php";
	$sql = "select * from cpinfo where cid=".$id;
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)){
		print "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['contact']."</td><td><a href='app_can_view.php?id=$row[id]'>View</a>
| <a href='app_can_education_view.php?id=$row[id]'>Education</a>		
|  <a href='app_can_experience_view.php?id=$row[id]'>Experience</a>
	|  <a href='app_msg.php?id=$row[id]'>Message</a>	
		</td></tr>";
		
	}
	

?>
  </table>
</div>
<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>

