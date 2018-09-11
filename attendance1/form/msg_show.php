 <?php include "../../header.php";?>

<?php 
  //add header
  include "../attendance_header.php";
?>
 

<table class="table table-striped">
  <thead>
      <tr>
        <th>Stu ID</th>
        <th>Type</th>
        <th>Description</th>
        <th>Date</th>
        <th>Action</th>
       
        
      </tr>
    </thead>
  <?php
    //adding header
    
    
    //fetch data from table query
    $sql = "select * from school_attendance_msg";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
    print "
        <tr>
        <th>$row[stu_id]</th>
        <th>$row[type]</th>
        <th>$row[description]</th>
        <th>$row[date]</th>
        <th><a href='msg_per_info_view.php?id=$row[id]'>View</a> | <a href='msg_edit.php?id=$row[id]'>Edit</a> | <a href='msg_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>