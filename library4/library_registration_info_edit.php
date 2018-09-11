
<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>

<?php
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_libr_registration_management_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	

<div class="container">
<hr />
  <h2>Edit Library Registration Information</h2>
<hr />  
  <form action="library_registration_info_update.php" method="post">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $_GET['id'];  ?>">
      <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" value="<?php print $row['name']; ?>" required />
    </div>
    <div class="form-group">
      <label for="user_name">User Name:</label>
      <input type="text" name="user_name" id="user_name" placeholder="Enter UserName" class="form-control"value="<?php print $row['user_name']; ?>"  required />
    </div>
      <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" name="image" id="image" placeholder="" class="form-control" value="<?php print $row['image']; ?>" />
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
     <input type="text" name="contact" id="contact" placeholder="Enter Contact Number" class="form-control"  value="<?php print $row['contact']; ?>" required />
    </div> 
    <div class="form-group">
      <label for="type">Type:</label>
	<select class="form-control" id="type" placeholder="" name="type" value="<?php print $row['type']; ?>" required >
      	<option value="Issue Date Over">Issue Date Over</option>
        <option value="Issue Date Over">Issue Date Over</option>
        <option value="Issue Date Over">Issue Date Over</option>
        <option value="Issue Date Over">Issue Date Over</option>
    </select>
    </div>
     <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" value="<?php print $row['password']; ?>" required />
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea rows="10" cols="20" id="address" name="address" class="form-control" required="required" ><?php print $row['address']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>