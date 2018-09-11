<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php include "circular_header.php"; 
  //Get id of url
  $id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_circular where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
  //fetch from table
  $row=mysqli_fetch_array($result);     
?>  


<div class="container">
<hr />
  <h2>Circular System</h2>
<hr />  
  <form action="school_circular_update.php" method="post">
  <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id']; ?>" required>
    <div class="form-group">
        <label for="job_type">Job Type:</label>
        <input type="text" class="form-control" id="job_type" placeholder="Job Type:" name="job_type" value="<?php print $row['job_type']; ?>" required>
    </div>
    <div class="form-group">
        <label for="educational_qualification">Educational Qualification:</label>
        <input type="text" class="form-control" id="educational_qualification" placeholder="Educational Qualification:" name="educational_qualification" value="<?php print $row['educational_qualification']; ?>" required>
    </div>
    <div class="form-group">
      <label for="required_experience">Required Experience:</label>
      <input type="text" class="form-control" id="required_experience" placeholder="Required Experience:" name="required_experience" value="<?php print $row['required_experience']; ?>" required>
    </div>
    <div class="form-group">
      <label for="job_salary">Job Salary:</label>
      <input type="number" class="form-control" id="job_salary" placeholder="Job Salary:" name="job_salary" value="<?php print $row['job_salary']; ?>" required>
    </div>
    
    <div class="form-group">
      <label for="job_location">Job Location:</label>
      <input type="text" class="form-control" id="job_location" placeholder="Job Location:" name="job_location" value="<?php print $row['job_location']; ?>" required>
    </div>
    
    <div class="form-group">
      <label for="job_time">Job Time:</label>
      <input type="text" class="form-control" id="job_time" placeholder="Job Time:" name="job_time" value="<?php print $row['job_time']; ?>" required>
    </div>
    
    



    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>
