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
  <h2>Add Book Issue Information</h2>
<hr />  
  <form action="library_book_issuel_info_store.php" method="post">
    <div class="form-group">
      <label for="member_id">Member Id:</label>
      <select class="form-control" id="member_id" placeholder="Member Id:" name="member_id" required>
        <?php  $result = mysqli_query($con,"select * from school_libr_registration_management_system"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
        
      </select>
    </div>
    <div class="form-group">
      <label for="book_id">Book Id:</label>
      <select  class="form-control" id="book_id" placeholder="Book Id" name="book_id" required>
        <?php  $result = mysqli_query($con,"select * from school_lib_books_infor_entry_system where cstatus='Available'"); 
		while($row=mysqli_fetch_array($result)){
		?>
        	<option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
      </select>
            
    </div>

    <div class="form-group">
      <label for="">Book Issue Date:</label>
      <input type="date" class="form-control" id="book_issue_date" placeholder="Book Issue Date" name="book_issue_date" required>
    </div>
    <div class="form-group">
      <label for="">Returning Date:</label>
      <input type="date" class="form-control" id="returning_date" placeholder="Returning Date" name="returning_date"  required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>