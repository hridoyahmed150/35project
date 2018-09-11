<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Member Information</h2>
<hr />  
  <form action="member_info_store.php" method="post">

    <div class="form-group">
      <label for="type">type</label>
      <select class="form-control" id="type" name="type"  required>
      	<option value="">Select type</option>
        <option value="regular member">regular member</option>
        <option value="iregular member">iregular member</option>
      </select>
    </div>

    <div class="form-group">
      <label for="member id">member id</label>
      <select class="form-control" id="member id" name="member id"  required>
      	<option value="">Select member id</option>
        <option value="1234565">1234565</option>
        <option value="1234565">1234566</option>
		<option value="1234565">1234567</option>
        <option value="1234565">1234568</option>
		<option value="1234565">1234569</option>
        <option value="1234565">1234570</option>
      </select>
    </div>
    <div class="form-group">
      <label for="user name">user name</label>
      <input type="text" class="form-control" id="user_name" placeholder="user_name" name="user_name"  required>
    </div>

    <div class="form-group">
      <label for="password">password</label>
      <input type="password" class="form-control" id="password" placeholder="password" name="password"  required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>