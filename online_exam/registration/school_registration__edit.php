<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_online_registration where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	

<div class="container">
<hr />
  <h2>Edit Registration System</h2>
<hr />  
  <form action="school_registration_update.php" method="post">
    <div class="form-group">
      <label for="id"> Student id:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $_GET['id'];  ?>">
      <input type="text" class="form-control" id="student_id" placeholder=" Student id" name="student_id" value="<?php print $row['student_id'];  ?>" required>
          </div>
          <div class="form-group">
      <label for="">User name:</label>
      <input type="text" class="form-control" id="user_name" placeholder="User name" name="user_name" value="<?php print $row['user_name'];  ?>"   required>
    </div>
    
    <div class="form-group">
      <label for="">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php print $row['password'];  ?>"   required>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>