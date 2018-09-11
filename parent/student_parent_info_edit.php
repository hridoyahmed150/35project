<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from parents_management_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit Student parent Information</h2>
<hr />  
  <form action="student_parent_info_update.php" method="post">
    <div class="form-group">
      <label for="student_id">Stufent ID:</label>
      <input type="hidden" class="form-control" id="student_id" name="student_id" value="<?php print $row['student_id'];  ?>">
            
      <input type="text" class="form-control" id="student_id" placeholder="Enter stufent id" name="student_id" value="<?php print $row['stufent_id'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="profession">Profession:</label>
      <input type="text" class="form-control" id="profession" placeholder="Profession" name="Profession"  value="<?php print $row['profession'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="">Office Location:</label>
      <input type="text" class="form-control" id="office_location" placeholder="office_location" name="office_location" value="<?php print $row['office_location'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="">Monthly Income:</label>
      <input type="text" class="form-control" id="monthly_income" placeholder="Monthly Income" name="monthly_income" value="<?php print $row['monthly_income'];  ?>"   required>
    </div>

    <div class="form-group">
      <label for="">Contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Permanent Address" name="contact" value="<?php print $row['contact'];  ?>"   required>
    </div>
    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?php print $row['email'];  ?>"  required>
    </div>

    <div class="form-group">
      <label for="pwd">National ID:</label>
      <input type="text" class="form-control" id="national_id" placeholder="Place Of Birth" name="national_id" value="<?php print $row['national_id'];  ?>"  required>
    </div>
    <div class="form-group">
      <label for="passport">Passport:</label>
      <input type="text" class="form-control" id="passport" placeholder="Passport" name="passport" value="<?php print $row['passport'];  ?>" >
    </div>    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>