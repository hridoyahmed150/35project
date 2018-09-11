<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Registration System</h2>
<hr />  
  <form action="school_registration_store.php" method="post">
 <div class="form-group">
      <label for=""> Student id:</label>
      <input type="id" class="form-control" id="id" placeholder="Student id" name="student_id"  required>
    </div>
    <div class="form-group">
      <label for="">User name:</label>
      <input type="text" class="form-control" id="name" placeholder="User name" name="user_name" required>
    </div>
    <div class="form-group">
      <label for="">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="password" name="password"  required>
    </div>

<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>