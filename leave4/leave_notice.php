<?php 
include "student_leave_header.php"; 
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
  <h2 align="center">Leave Notice Management System</h2>
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
  <form action="leave_notice_store.php" method="post">
     <div class="form-group">
      <label for="pwd">Type:</label>
      <select class="form-control" id="type" name="type"  required>
        <option value="All">All</option>
        <option value="Employee">Employee</option>
        <option value="Teacher">Teacher</option>
        <option value="Student">Student</option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Publish Date:</label>
      <input type="date" class="form-control" id="publish_date" placeholder="Publish" name="publish_date" required>
    </div>

    <div class="form-group">
      <label for="">Expire Day:</label>
      <input type="date" class="form-control" id="expire_date" placeholder="Expire" name="expire_date" required>
    </div>
    <div class="form-group">
      <label for="">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject"  required>
    </div>

    <div class="form-group">
      <label for="">Description:</label>
      <textarea class="form-control" id="description" placeholder="Description" name="description" required>
      </textarea>
    </div>
<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "footer.php"; ?>
