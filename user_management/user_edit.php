<?php 
include "user_management_header.php"; 
include "print.php";


	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_user_info where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>



<div class="container">
<hr />
  <h2 align="center">Edit User Management System</h2>
<hr /> 
<!-- print button start -->
<div align="right" style="margin-top:-10px;margin-top:-10px;margin-right:50px;padding:0px;">
  <input type="button" value="print" onclick="PrintDiv();" 
  class="btn btn-success"
  />
</div>
<!-- print button end -->
<!-- print header start -->
        <div id="divToPrint">

<div align="center" id='print' class="container">
    <style>
        #print p{
            margin-top: -10px;
            
        }
    </style>
    <h2 align="center" style="color:red;">Little Flower School</h2>
    <p>195, Bonani, Chairman Goli, Dhaka, Bangladesh</p>
    <p>Telephone: 02-420420420</p>
    <p>Email: faru@gmail.com</p>
<div>
<hr />
<!-- print header end -->	 
  <form action="user_update.php" method="post">

    
    <div class="form-group">
      <input type="hidden" name="id" id="id" value="<?php print $row['id'];  ?>" />	
      <label for="username">username:</label>
      <input type="text" class="form-control" id="username" placeholder="username" name="username"  value="<?php print $row['username'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="password">password:</label>
      <input type="password" class="form-control" id="password" placeholder="password" name="password" value="<?php print $row['password'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="">department:</label>
      <select class="form-control" id="department" name="department"  required>
        <option value="<?php print $row['department'];  ?>"><?php print $row['department'];  ?></option>
        <option value="Student">student</option>
        <option value="Member">member</option>
        <option value="Attendance">attendance</option>
        <option value="Tution_fee">tution_fee</option>
        <option value="Class">class</option>
        <option value="Event">event</option>
        <option value="Feedback">feedback</option>
        <option value="Online_exam">online_exam</option>
        <option value="Circular">circular</option>
        <option value="Leave">leave</option>
        <option value="Library">library</option>
        <option value="Employee">employee</option>
        <option value="Notice">notice</option>
        <option value="Laboratory">laboratory</option>
        <option value="Parent">parent</option>
        <option value="Admission">admission</option>
        <option value="Transport">transport</option>
        <option value="Result">result</option>
        <option value="Canteen">canteen</option>
        <option value="Accounts">accounts</option>
</select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "footer.php"; ?>
