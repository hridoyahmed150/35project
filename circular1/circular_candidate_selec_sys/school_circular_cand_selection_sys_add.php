<?php
    //adding header
    include "../header.php";
?>  


<div class="container">
<hr />
  <h2>Candidate Selection System</h2>
<hr />  
  <form action="school_circular_cand_selection_sys_store.php" method="post">
    <div class="form-group">
        <label for="applicant_id">Applicant Id:</label>
        <select class="form-control" id="applicant_id" name="applicant_id"   required>
              <option value="select">Select</option>
              <option value='101'>101</option>
              <option value='102'>102</option>
              <option value='103'>103</option>
              <option value='104'>104</option>
              <option value='105'>105</option>
              <option value='106'>106</option>
              <option value='107'>107</option>
              <option value='108'>108</option>
              <option value='109'>109</option>
              <option value='110'>110</option>
          </select>
    </div>
    
    <div class="form-group">
      <label for="interview_time">Interview Time:</label>
      <input type="time-date" class="form-control" id="interview_time" placeholder="Interview Time:" name="interview_time" required>
    </div>
    <div class="form-group">
      <label for="interview_location">Interview Location:</label>
      <input type="text" class="form-control" id="interview_location" placeholder="Interview Location:" name="interview_location" required>
    </div>
    <div class="form-group">
      <label for="message_applicant">Message Applicant:</label>
      <input type="text" class="form-control" id="message_applicant" placeholder="Message Applicant::" name="message_applicant" required>
    </div>


   
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>