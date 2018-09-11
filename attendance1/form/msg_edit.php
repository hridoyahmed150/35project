
    
<?php 
  //add header
  include "../attendance_header.php";
?>
 
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_attendance_msg where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2><center>Edit Massage</center></h2>
<hr />  
  <form action="msg_update.php" method="post">
    <div class="form-group">
      <label for="date">ID:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">      
      <input type="number" class="form-control" id="stu_id" placeholder="" name="stu_id" value="<?php print $row['stu_id'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="type">Type:</label>
      <input type="text" class="form-control" id="type" placeholder="" name="type" value="<?php print $row['type'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="" name="description" value="<?php print $row['description'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="date">Date::</label>
      <input type="date" class="form-control" id="date" placeholder="" name="date" value="<?php print $row['date']; ?>" required>
    </div>

       

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>

