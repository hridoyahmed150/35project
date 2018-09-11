<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>
 
<?php
    //adding header
 include "employee_header.php";
 
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_emp_exp_info where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2><center>Edit Employee Experience Information</center></h2>
<hr />  
  <form action="school_emp_exp_info_update.php" method="post">
    <div class="form-group">
      <label for="company_name">Company Name:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">      
      <input type="text" class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php print $row['company_name'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="designation">Designation:</label>
      <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation" value="<?php print $row['designation'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="year">Year:</label>
      <select class="form-control" id="year" name="year"  required>
        <option value="<?php print $row['year'];  ?>">
          <?php print $row['year'];  ?></option>
        <option value="1988">1988</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
      </select>
    </div>

    <div class="form-group">
      <label for="salary">Salary:</label>
      <input type="number" class="form-control" id="salary" placeholder="Salary" name="salary" value="<?php print $row['salary'];  ?>" required>
    </div>    

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>