<div class="container">
<hr />
<h1>Member Information</h1>
<hr />
<div align="right"><a href="member_info_add.php">Add Member</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>type</th>
        <th>member id</th>
        <th>user name</th>
		<th>password</th>
		<th>cstatus</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_membership_management_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[type]</th>
        <th>$row[member_id]</th>
		<th>$row[user_name]</th>
		<th>$row[password]</th>
		<th><a href='member_info_view.php?id=$row[id]'>View</a> | <a href='member_info_edit.php?id=$row[id]'>Edit</a> | <a href='member_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>


