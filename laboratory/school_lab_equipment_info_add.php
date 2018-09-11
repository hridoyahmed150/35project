<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='laboratory'){

 ?>
 
<?php
    //adding header
    include "laboratory_header.php";
?>
	


<div class="container">
<hr />
  <h2>Lab Equipment Information</h2>
<hr />  
  <form action="school_lab_equipment_info_store.php" method="post">
    <div class="form-group">
      <label for="email">Lab Type:</label>
      <input type="text" class="form-control" id="lab_type" placeholder="Lab Type" name="lab_type" required>
    </div>
    <div class="form-group">
      <label for="pwd">Equipment Name::</label>
      <input type="text" class="form-control" id="equipment_name" placeholder="Equipment Name:" name="equipment_name" required>
    </div>


   
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "laboratory_footer.php"; ?>

<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>