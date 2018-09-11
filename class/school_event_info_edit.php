<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='class'){

 
    //adding header
    include "../header.php";
	include "student_header.php";
?>	
<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_event_info where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
  <h1 align="center" style="color:#660000">Event Management System </h1>
<h2 align="center" style="color:#660000">Event Entry</h2>
<hr /> 

 <form action="school_event_info_update.php" method="post">
  <input type="hidden" name="id" id="id" value="<?php print $row['id'];?>" />
   <div class="form-group">
     <label for="pwd">Event Name:</label>
      <select class="form-control" id="event_name" name="event_name"  required>
      	<option value="<?php print $row['event_name'];?>"><?php print $row['event_name'];?></option>
        <option value="Cultural Program">Cultural Program</option>
        <option value="National program">National program</option>
        <option value="Annual program">Annual program</option>
        <option value="Debate program">Debate program</option>
        <option value="Re-union">Re-union</option>
        <option value="Picnic">Picnic</option>
        <option value="Rag-day">Rag-day</option>
        <option value="Fresher program">Fresher program</option>
      </select>
    </div>
  <div class="form-group">
     <label for="pwd">Topic:</label>
  <input type="text" name="topic" id="topic" value="<?php print $row['topic'];?>" class="form-control" />
  </div>  
  <div class="form-group">
     <label for="pwd">Date of event:</label>
  <input type="date" name="date_of_event" id="date_of_event" value="<?php print $row['date_of_event'];?>" class="form-control" />
  </div>
  
  
    <div class="form-group">
     <label for="pwd">Location:</label>
  <input type="text" name="location" id="location" value="<?php print $row['location'];?>" class="form-control" />
    </div>
    
    
    <div class="form-group">
     <label for="pwd">Time:</label>
      <input type="time" name="time" id="time" value="<?php print $row['time'];?>"  class="form-control"/>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    
    </form>
    </div>
    </div>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";
	
}
	?>