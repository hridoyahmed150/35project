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
  <h2>Add Book's Information</h2>
<hr />  
  <form action="library_book_info_store.php" method="post">
    <div class="form-group">
      <label for="book-name">Book Name:</label>
      <input type="text" class="form-control" id="book_name" placeholder="Enter Book name" name="book_name" required>
    </div>
    <div class="form-group">
      <label for="author_name">Author Name:</label>
      <input type="text" class="form-control" id="author_name" placeholder="Author Name" name="author_name" required>
    </div>

    <div class="form-group">
      <label for="">Publisher Name:</label>
      <input type="text" class="form-control" id="publisher_name" placeholder="Publisher Name" name="publisher_name" required>
    </div>
    <div class="form-group">
      <label for="">Quantity:</label>
      <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity"  required>
    </div>

    <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="cdate" placeholder="" name="cdate" required>
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>