
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
    $sql = "select * from school_lib_books_infor_entry_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit Library Book's Information</h2>
<hr />  
  <form action="library_book_info_update.php" method="post">
    <div class="form-group">
      <label for="email">Book Name:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id']; ?>" required>      
      <input type="text" class="form-control" id="book_name" placeholder="Enter Book name" name="book_name" value="<?php print $row['book_name']; ?>" required>
    </div>
    <div class="form-group">
      <label for="pwd">Author Name:</label>
      <input type="text" class="form-control" id="author_name" placeholder="Author Name" name="author_name"  value="<?php print $row['author_name']; ?>" required>
    </div>

    <div class="form-group">
      <label for="">Publisher Name:</label>
      <input type="text" class="form-control" id="publisher_name" placeholder="Publisher Name" name="publisher_name"  value="<?php print $row['publisher_name']; ?>" required>
    </div>
    <div class="form-group">
      <label for="">Quantity:</label>
      <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity"  value="<?php print $row['quantity']; ?>"  required>
    </div>

    <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="cdate" placeholder="" name="cdate" value="<?php print $row['cdate']; ?>" required>
    </div>
    <div class="form-group">
      <label for="">Status:</label>

      <select class="form-control" id="cstatus" name="cstatus">
      	<option value="<?php print $row['cstatus']; ?>"><?php print $row['cstatus']; ?></option>
        <option value="Available">Available</option>
        <option value="Lost">Lost</option>
        <option value="Issue">Issue</option>
        <option value="Repair">Repair</option>
        
      </select>
    </div>   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>