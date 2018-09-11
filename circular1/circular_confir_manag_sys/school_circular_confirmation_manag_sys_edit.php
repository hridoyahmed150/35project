<?php
    //adding header
    include "../header.php";
  //Get id of url
  $id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_circular_confirmation_management_system where id=".$id;
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
    <div class="form-group">
        <label for="applicant_id">Applicant Id:</label>
        <select class="form-control" id="applicant_id" name="applicant_id" value="<?php print $row['applicant_id']; ?>"  required>
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
        <label for="confirmation_message">Confirmation Message:</label>
        <input type="text" class="form-control" id="confirmation_message" placeholder="Confirmation Message:" name="confirmation_message" value="<?php print $row['confirmation_message']; ?>"required>
    </div>
    <div class="form-group">
      <label for="joining_date">Joining Date:</label>
      <input type="date" class="form-control" id="joining_date" placeholder="Joining Date:" name="joining_date" value="<?php print $row['joining_date']; ?>"required>
    </div>
    



    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>