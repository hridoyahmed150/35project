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
<h1>Library Book Issue Information</h1>
<hr />
<div align="right"><a href="library_book_issue_info_add.php">Add Book Issue</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Member Id</th>
        <th>Book Id</th>
        <th>Book Issue Date</th>
        <th>Returning Date</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_books_issue_management_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[member_id]</th>
        <th>$row[book_id]</th>
        <th>$row[book_issue_date]</th>
		<th>$row[returning_date]</th>
		
        <th><a href='library_book_issue_info_view.php?id=$row[id]'>View</a> | <a href='library_book_issue_info_edit.php?id=$row[id]'>Edit</a> | <a href='library_book_issue_info_delete.php?id=$row[id]'onclick='return checkDelete()'>Delete</a></th>
        
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


