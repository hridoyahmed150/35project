<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='laboratory'){

 ?>
 
<?php
    //adding header
    include "laboratory_header.php";
  //Get id of url
  $id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_lab_euipment_distribution where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
  //fetch from table
  $row=mysqli_fetch_array($result);     
?>  


<div class="container">
<hr />
  <h2>Lab Distribution</h2>
<hr />  
  <form action="school_lab_equipment_distribution_update.php" method="post">
  <input type="hidden" name="id" id="id" 
  value="<?php print $_GET['id']; ?>" />
    <div class="form-group">
        <label for="student_id">Student ID:</label>
        <select class="form-control" id="student_id" 
         name="student_id" value = "<?php print $row['student_id']; ?>" 
        required>
              <option value="">Student ID</option>
        <?php  $result = mysqli_query($con,"select * from school_std_pinfo"); 
    while($row=mysqli_fetch_array($result)){
    ?>
          <option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
          </select>
    </div>
    <div class="receive_date">
      <label for="receive_date">Receive Date:</label>
      <input type="date" class="form-control" id="receive_date" placeholder="Receive Date:" name="receive_date" value = "<?php print $row['receive_date']; ?>" required>
    </div>
    <div class="submission_date">
      <label for="submission_date">Submission Date:</label>
      <input type="date" class="form-control" id="submission_date" placeholder="Submission Date:" name="submission_date" value = "<?php print $row['submission_date']; ?>" required>
    </div>

    <div class="form-group">
        <label for="equipment_id">Equipment ID:</label>
        <select class="form-control" id="equipment_id" 
         name="equipment_id" value = "<?php print $row['equipment_id']; ?>" required>
             <option value="">Equipment ID</option>
        <?php  $result = mysqli_query($con,"select * from school_lab_equipment_information"); 
    while($row=mysqli_fetch_array($result)){
    ?>
          <option value="<?php print $row['id'] ?>"><?php print $row['id'] ?></option>
        <?php } ?>
          </select>
    </div>
    
   


    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "laboratory_footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>