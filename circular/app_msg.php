<?php 
@session_start();
if (isset($_SESSION['username']) && $_SESSION['department']=='circular'){
?>
<?php
	//get id
	 $id = $_GET['id'];
  //adding header
    include "circular_header.php";
	//sql query to information of this ID
	$sql = "select * from cexpinfo where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<form action="" method="post">	
  <div class="row">
    <div class="col-sm-3 col-md-3"><b>Message:</b> </div>
    <div class="col-sm-3 col-md-3">
      <input type="hidden" id="id" name="id" value="<?php print $_GET['id'];  ?>" />	
      <textarea class="form-control" id="message" placeholder="Message" name="message" required>
      </textarea>	
    </div>
  </div>
  <hr />
  <div class="row">  
    <div class="col-sm-3 col-md-3"><b>Date:</b> </div>
    <div class="col-sm-3 col-md-3">
    	<input type="date" name="msgdate" id="msgdate"  class="form-control" />
    
    </div>

  </div> 
  <hr />
  
  <div class="row">  
    <div class="col-sm-6 col-md-6">
     <button type="submit" class="btn btn-default" name="submit" id="submit" value="Message Send">Submit</button>   
    </div>

  </div> 
    
<hr />
</form>	
</div> 
  
<?php include "circular_footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>
  
  <?php
  	include "../db/dbcon.php";
	if(isset($_POST['submit'])){
		$message = $_POST['message'];
		$msgdate = $_POST['msgdate'];
		$id = $_POST['id'];
		$sql = "insert into app_msg values('',$id,'$message','$msgdate',1)";
		mysqli_query($con,$sql);
		header('Location: school_circular.php');
	}
  
  
  ?>
