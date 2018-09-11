<?php 
include "user_management_header.php"; 
include "print.php";


	//get id
	//$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	//$sql = "select * from school_notice where id=".$id;
	//execute the query
	//$result = mysqli_query($con,$sql);
	//fetch the resultset
	//$row = mysqli_fetch_array($result);
		
?>


<div class="container">
<hr />
  <h2 align="center">User Management System</h2>
<hr />  
<!-- print button start -->
<div align="right" style="margin-top:-10px;margin-top:-10px;margin-right:50px;padding:0px;">
  <input type="button" value="print" onclick="PrintDiv();" 
  class="btn btn-success"
  />
</div>
<!-- print button end -->
<!-- print header start -->

<hr />
<div class="container">
<!-- print header end -->	
  <form action="user_management_store.php" method="post">
     <div class="form-group">
      <label for="username">username:</label>
	  <input type="text" class="form-control" id="username" placeholder="username" 
	  name="username" required>
    </div>
    <div class="form-group">
      <label for="password">password:</label>
      <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
    </div>

    <div class="form-group">
      <label for="department">department:</label>
      <select class="form-control" id="department" name="department"  required>
        <option value="All">All</option>
        <option value="employee">Employee</option>
        <option value="student">Student</option>
        <option value="Member">member</option>
        <option value="Attendance">attendance</option>
        <option value="tution_fee">Tution Fee</option>
        <option value="class">Class</option>
        <option value="event">Event</option>
        <option value="feedback">Feedback</option>
        <option value="online_exam">Online Exam</option>
        <option value="circular">Circular</option>
        <option value="leave">Leave</option>
        <option value="library">Library</option>

        <option value="notice">Notice</option>
        <option value="laboratory">Laboratory</option>
        <option value="parent">Parent</option>
        <option value="admission">Admission</option>
        <option value="transport">Transport</option>
        <option value="result">Result</option>
        <option value="canteen">Canteen</option>
        <option value="accounts">Accounts</option>
        
</select>
    </div>
<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "footer.php"; ?>
