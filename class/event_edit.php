<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='class'){

 ?>

<?php include "student_header.php"; ?>	
<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_event_participant where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
  <h1 align="center" style="color:#660000">Event Management System </h1>
<h2 align="center" style="color:#660000">Participant's Entry</h2>
<hr /> 

 <form action="event_info_update.php" method="post">
  <input type="hidden" name="id" id="id" value="<?php print $row['id'];?>" />
    <div class="form-group">
     <label for="pwd">Student ID:</label>
      <input type="number" name="student_id" id="student_id" value="<?php print $row['student_id'];?>"  class="form-control"/>
    </div>
    <div class="form-group">
     <label for="pwd">Event ID:</label>
      <input type="number" name="event_id" id="event_id" value="<?php print $row['event_id'];?>"  class="form-control" />
    </div>

    <div class="form-group">
     <label for="pwd">Topic:</label>
      <select class="form-control" id="topic" name="topic"  required>
      	<option value="<?php print $row['topic'];?>"><?php print $row['topic'];?></option>
        <option value="Debate">Debate</option>
        <option value="Drama">Drama</option>
        <option value="Long jump">Long jump</option>
        <option value="Discuss">Discuss</option>
      </select>
    </div>
<div class="form-group">
     <label for="pwd">Status:</label>
      <select class="form-control" id="cstatus" name="cstatus"  required>
      	<option value="<?php print $row['cstatus'];?>"><?php print $row['cstatus'];?></option>
        <option value="Interested">Interested</option>
        <option value="Selected">Selected</option>
        <option value="Not selected">Not selected</option>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    
    </form>
    </div>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>
