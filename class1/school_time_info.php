<div class="container">
<hr />
<h1>Student Personal Information</h1>
<hr />
<div align="right"><a href="school_class_time_add.php">Add Class Information</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Class Name</th>
        <th>Section</th>
        <th>Class Subject</th>
        <th>Class day</th>
        <th>Class Time</th>
		<th>Action</th>         
        
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_class_time";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[class_name]</th>
        <th>$row[section]</th>
		<th>$row[shift]</th>
        <th>$row[subject]</th>
        <th>$row[class_day]</th>
		<th>$row[class_time]</th>

        <th><a href='school_class_time_info_view.php?id=$row[id]'>View</a> | <a href='school_class_time_edit.php?id=$row[id]'>Edit</a> | <a href='school_class_time_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>


