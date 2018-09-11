
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
  <h2>Add Library Registration Information</h2>
<hr />  
  <form action="library_registration_info_store.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" required />
    </div>
    <div class="form-group">
      <label for="user_name">User Name:</label>
      <input type="text" name="user_name" id="user_name" placeholder="Enter UserName" class="form-control" required />
    </div>
      <div class="form-group">
      <label for="image">Email:</label>
      <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" required />
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" name="contact" id="contact" placeholder="Enter Contact Number" class="form-control" required />
    </div>
    <div class="form-group">
      <label for="type">Type:</label>
	<select class="form-control" id="type" name="type" required>
      	<option value="Student">Student</option>
        <option value="Teacher">Teacher</option>
        <option value="Parent">Parent</option>
        <option value="Stuff">Stuff</option>
		<option value="Public">Public</option>
    </select>
    </div>
     <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" required />
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea rows="10" cols="20" id="address" name="address" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>