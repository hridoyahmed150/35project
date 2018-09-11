<div class="container">
<hr />
<h1>Student Personal Information</h1>
<hr />
<div align="right"><a href="#">Add Student</a></div>
<table  class="table table-striped">
  <thead>
      <tr>
        <th>Name</th>
        <th>father_name</th>
        <th>present_address</th>
        <th>Action</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_std_pinfo";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[name]</th>
        <th>$row[father_name]</th>
        <th>$row[present_address]</th>
        <th><a href='#'>View</a> | <a href='#'>Edit</a> | <a href='#'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>


