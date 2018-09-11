<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php include "circular_header.php"; 
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_circular_applicant_experience_information where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Circular Experience Information</h2>
<hr />  
  <form action="school_circular_app_exp_info_update.php" method="post">
    <div class="form-group">
       <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id']; ?>" required> 
      <label for="company_name">Company Name:</label>
      <input type="text" class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php print $row['company_name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="designation">Designation:</label>
        <select class="form-control" id="designation" name="designation"  value="<?php print $row['equipment_name']; ?>" required>
              <option value="select">Select</option>
              <option value='student'>Student</option>
              <option value='teacher'>Teacher</option>
          </select>
    </div>
    <div class="form-group">
      <label for="year">Year:</label>
      <input type="date" class="form-control" id="year" placeholder="Year:" name="year"  value="<?php print $row['year']; ?>" required>
    </div>
    <div class="form-group">
      <label for="salary">Salary:</label>
      <input type="text" class="form-control" id="salary" placeholder="Salary:" name="salary" value="<?php print $row['salary']; ?>" required>
    </div>



    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>