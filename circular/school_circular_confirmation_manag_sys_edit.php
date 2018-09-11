<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>

<?php include "circular_header.php";
  
  //Get id of url
  $id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from app_msg where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
  //fetch from table
  $row=mysqli_fetch_array($result);     
?>  


<div class="container">
<hr />
  <h2>Circular Confirmation Management System</h2>
<hr />  
  <form action="school_circular_confirmation_manag_sys_update.php" method="post">
  <input type="hidden" name="id" value="<?php print $_GET['id'];  ?>" />
    <div class="form-group">
        <label for="applicant_id">Applicant Id:</label>
        <select class="form-control" id="applicant_id" name="applicant_id"  required>
              <option  value="<?php print $row['app_id']; ?>"><?php print $row['app_id']; ?></option>
              <?php
			      $sql1 = "select * from app_msg";
    //execute query
    $result1 = mysqli_query($con,$sql1);
  //fetch from table
  while($row1=mysqli_fetch_array($result1)){ 
			  ?>
              
              <option value='<?php print $row1['app_id']; ?>'><?php print $row1['app_id']; ?></option>
		<?php } ?>
          </select>
    </div>
    <div class="form-group">
        <label for="confirmation_message">Confirmation Message:</label>
        <input type="text" class="form-control" id="confirmation_message" placeholder="Confirmation Message:" name="confirmation_message" value="<?php print $row['message']; ?>"required>
    </div>
    <div class="form-group">
      <label for="joining_date">Joining Date:</label>
      <input type="date" class="form-control" id="joining_date" placeholder="Joining Date:" name="joining_date" value="<?php print $row['msgdate']; ?>"required>
    </div>
    



    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>