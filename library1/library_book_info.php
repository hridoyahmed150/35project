<div class="container">
<hr />
<h1>Student Personal Information</h1>
<hr />
<div align="right"><a href="library_book_info_add.php">Add Student</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Boook Name</th>
        <th>Publisher</th>
        <th>Author</th>
        <th>Quantity</th>        
        <th>Action</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_lib_books_infor_entry_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[boook_name]</th>
        <th>$row[publisher_name]</th>
        <th>$row[author_name]</th>
        <th>$row[quantity]</th>
		
        <th><a href='library_book_info_view.php?id=$row[id]'>View</a> | <a href='library_book_info_edit.php?id=$row[id]'>Edit</a> | <a href='library_book_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>


