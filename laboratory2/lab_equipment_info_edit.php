<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_lab_equipment_information where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Lab Information</h2>
<hr />  
  <form action="lab_equipment_info_update.php" method="post">
    <div class="form-group">
      <label for="email">Lab Type:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id']; ?>" required>      
      <input type="text" class="form-control" id="lab_type" placeholder="Lab Type" name="lab_type" value="<?php print $row['lab_type']; ?>" required>
    </div>
    <div class="form-group">
      <label for="pwd">Equipment Name:</label>
      <input type="text" class="form-control" id="equipment_name" placeholder="Equipment Name" name="equipment_name"  value="<?php print $row['equipment_name']; ?>" required>
    </div>



    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>