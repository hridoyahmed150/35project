<div class="container">
<hr />
<h1>Circular Reference Information</h1>
<hr />
<div align="right"><a href="school_circular_app_reference_info_add.php">Add Circular Reference</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Designation</th>
      <th>Address</th>
      <th>Contact</th>
      <th>Email</th>
    </tr>
  </thead>
  <?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from  school_circular_applicant_reference_information";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
    print "
        <tr>
        <th>$row[name]</th>
        <th>$row[designation]</th>
        <th>$row[address]</th>
        <th>$row[contact]</th>
        <th>$row[email]</th>
        <th><a href='school_circular_app_reference_info_view.php?id=$row[id]'>View</a> | <a href='school_circular_app_reference_info_edit.php?id=$row[id]'>Edit</a> | <a href='school_circular_app_reference_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>


