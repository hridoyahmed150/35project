<?php
    //adding header
    include "../header.php";
  //Get id of url
  $id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_circular_candidate_selection_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
  //fetch from table
  $row=mysqli_fetch_array($result);     
?>  


<div class="container">
<hr />
  <h2>Candidate Selection System</h2>
<hr />  
  <form action="school_circular_cand_selection_sys_update.php" method="post">
    <div class="form-group">
       <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id']; ?>" required> 
      <label for="applicant_id">Applicant Id:</label>
      <input type="text" class="form-control" id="applicant_id" placeholder="Applicant Id" name="applicant_id" value="<?php print $row['applicant_id']; ?>" required>
    </div>
    <div class="form-group">
        <label for="interview_time">Interview Time:</label>
        <input type="text" class="form-control" id="interview_time" placeholder="Interview Time:" name="interview_time"  value="<?php print $row['interview_time']; ?>" required>
    </div>
    <div class="form-group">
      <label for="interview_location">Interview Location:</label>
      <input type="date" class="form-control" id="year" placeholder="Interview Location:" name="interview_location"  value="<?php print $row['interview_location']; ?>" required>
    </div>
    <div class="form-group">
      <label for="message_applicant">Message Applicant:</label>
      <input type="text" class="form-control" id="message_applicant" placeholder="Message Applicant:" name="message_applicant" value="<?php print $row['message_applicant']; ?>" required>
    </div>



    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>