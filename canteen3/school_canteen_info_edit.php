<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){
 ?>
<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_canteen where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit School Canteen Information</h2>
<hr />  
  <form action="school_canteen_info_update.php" method="post">
    <div class="form-group">
      <label for="email">Student_Name:</label>
      <input type="hidden" class="form-control" id="sname" name="sname" value="<?php print $row['id'];  ?>">
            
      <input type="text" class="form-control" id="sname" placeholder="Enter Student Name" name="sname" value="<?php print $row['student_name'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="pwd">Duration:</label>
      <input type="text" class="form-control" id="duration" placeholder="Duration" name="duration"  value="<?php print $row['duration'];  ?>" required>
    </div>
        
    <div class="form-group">
      <label for="">Amount:</label>
      <input type="text" class="form-control" id="amount" placeholder="Amount" name="amount" value="<?php print $row['amount'];  ?>" required>
    </div>
     <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Date" name="date" value="<?php print $row['date'];  ?>"  required>
    </div>
    <div class="form-group">
      <label for="">Agreement:</label>
      <input type="text" class="form-control" id="agreement" placeholder="Agreement" name="agreement" value="<?php print $row['agreement'];  ?>"   required>
    </div>
    
     <div class="form-group">
      <label for="pwd">contact:</label>
      <input type="number"class="form-control" id="contact" placeholder="contact" name="contact" value="<?php print $row['contact'];  ?>"  required>
    </div>

    <div class="form-group">
      <label for="">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="address" name="address" value="<?php print $row['address'];  ?>"   required>
    </div>
   
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php print $row['email'];  ?>" >
    </div>    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>