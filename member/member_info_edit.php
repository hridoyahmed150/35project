<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='member'){

 ?>
<?php include "member_header.php"; ?> 
<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_membership_management_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit Member Information</h2>
<hr />  
  <form action="member_info_update.php" method="post">
  <input type="hidden" id="id" name="id" value="<?php print $_GET['id']; ?>" />
    <div class="form-group">
      <label for="type">type</label>
      <input type="hidden" class="form-control" id="type" name="type" value="<?php print $row['type'];  ?>">
    </div>
    <div class="form-group">
      <label for="pwd">member id</label>
      <select class="form-control" id="member_id" name="member_id"  required>
      	<option  value="<?php print $row['member_id'];  ?>">
		<?php print $row['member_id'];  ?></option>        
		<option value="1245786">1245786</option>
        <option value="1245787">1245787</option>
        <option value="1245788">1245788</option>
		<option value="1245786">1245789</option>
        <option value="1245787">1245790</option>
        <option value="1245788">1245791</option>
      </select>
    </div>

    <div class="form-group">
      <label for="user name">user name</label>
      <input type="text" class="form-control" id="user_name" 
	  placeholder="user name" name="user_name" 
	  value="<?php print $row['user_name'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="password">password</label>
      <input type="password" class="form-control" id="password" placeholder="password" name="password" value="<?php print $row['password'];  ?>"   required>
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>