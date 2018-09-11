<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_membership_management_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Member Information Details</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>type</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['type'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>member_id</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['member_id'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>user_name </b> 
	</div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['user_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:">
	<b>password</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['password'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>cstatus</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:">
	<?php print $row['cstatus'];?></div>
  </div>   
<hr />
  
      
</div>