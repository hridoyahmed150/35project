<div class="container">
<hr />
<h1>Lab Equipment Information</h1>
<hr />
<div align="right"><a href="school_lab_equipment_info_add.php">Add Student</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Lab Type</th>
        <th>Equipment Name</th>
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from  school_lab_equipment_information";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[lab_type]</th>
        <th>$row[equipment_name]</th>
        <th><a href='school_lab_equipment_info_view.php?id=$row[id]'>View</a> | <a href='school_lab_equipment_info_edit.php?id=$row[id]'>Edit</a> | <a href='school_lab_equipment_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>


