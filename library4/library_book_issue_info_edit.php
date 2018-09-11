
<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>
<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_books_issue_management_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit Library Books Issue Information</h2>
<hr />  
  <form action="library_book_issuel_info_update.php" method="post">
    <div class="form-group">
      <label for="member_id">Member Id:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">
      <select class="form-control" id="member_id" placeholder="Member Id" name="member_id"  required>
      	<option value="<?php print $row['member_id'];  ?>"><?php print $row['member_id'];  ?></option>
      	<option value="1">1</option>
      	<option value="2" >2</option>
      	<option value="3" >3</option>
      	<option value="4">4</option>
      	<option value="5">5</option>
      </select>      
    </div>
    <div class="form-group">
      <label for="book_id">Book Id:</label>
      <select class="form-control" id="book_id" placeholder="Book Id" name="book_id" required>
      	<option value="<?php print $row['book_id'];  ?>"><?php print $row['book_id'];  ?></option>
      	<option value="1">1</option>
      	<option value="2" >2</option>
      	<option value="3" >3</option>
      	<option value="4">4</option>
      	<option value="5">5</option>
      </select>       
    </div>
    <div class="form-group">
      <label for="cdata">Book Issue Date:</label>
      <input type="date" class="form-control" id="book_issue_date"  name="book_issue_date" value="<?php print $row['book_issue_date'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="returning_date">Returning Date:</label>
      <input type="text" class="form-control" id="returning_date"  name="returning_date" value="<?php print $row['returning_date'];  ?>"   required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>