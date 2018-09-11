<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_notice where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit Notice Management System</h2>
<hr />  
  <form action="notice_update.php" method="post">
    <div class="form-group">
      <label for="id">Type:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">
            

      <select id="type" name="type" class="form-control">
      	<option  value="<?php print $row['type'];  ?>"><?php print $row['type'];  ?></option>        <option value="">All</option>
        <option value="Employee">Employee</option>
        <option value="Teacher">Teacher</option>
        <option value="Student">Student</option>
       
      </select>
    </div>
    
    <div class="form-group">
      <label for="pwd">Publish:</label>
      <input type="date" class="form-control" id="publish_date" placeholder="Publish" name="publish_date"  value="<?php print $row['publish_date'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="">Expire:</label>
      <input type="date" class="form-control" id="expire_date" placeholder="Expire" name="expire_date" value="<?php print $row['expire_date'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" value="<?php print $row['subject'];  ?>"   required>
    </div>

    <div class="form-group">
      <label for="">Description:</label>
      <textarea class="form-control" id="description" placeholder="description" name="description" required>
      <?php print trim($row['description']);  ?>
      </textarea>
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>