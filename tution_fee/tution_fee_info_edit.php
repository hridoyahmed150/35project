<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='tution_fee'){

 ?>
<?php
    //adding header
   include "tution_fee_header.php"; 
   include "../header.php";

	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_tution_fee where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);		
?>	


<div class="container">
<hr />
  <h2>Edit Student Tution Fees Information</h2>
<hr />  
  <form class="form-horizontal" action="tution_fee_info_update.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Student ID:</label>
     <div class="col-sm-8">
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">     
      <input type="text" class="form-control"id="name" placeholder="Enter Student ID" name="student_id" value="<?php print $row['student_id'];?>" required>
     </div>
    </div>
    
   <div class="form-group">
      <label  class="control-label col-sm-2" for="">paid_date:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="paid_date" placeholder="" name="paid_date" value="<?php print $row['paid_date'];?>"  required>
    </div>
    </div>
    
    
 <div class="form-group">
      <label class="control-label col-sm-2" for="month">Month:</label>
      <div class="col-sm-8">
      <select class="form-control" id="paid_month" name="paid_month"  required>
        <option value="<?php print $row['paid_month'];?>"><?php print $row['paid_month'];?></option>      
        <option value="">Select Month</option>
        <option value="January" id="month">January</option>
        <option value="February" id="month">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
      </select>
      </div>
   </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="month">year:</label>
      <div class="col-sm-8">
      <select class="form-control" id="paid_year" name="paid_year"  required>  
        <option value="<?php print $row['paid_year'];?>"><?php print $row['paid_year'];?></option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
        <option value="2027">2027</option>
        <option value="2028">2028</option>
        <option value="2029">2029</option>
        <option value="2030">2030</option>
      </select>
      </div>
   </div>
    
     
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="fee_paid">Amount:</label>
       <div class="col-sm-8">
      <input type="number" class="form-control" id="fee_paid" placeholder="Amount" name="fee_paid"  value="<?php print $row['fee_paid'];  ?>" required>
    </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="paid_status">paid_status:</label>
      <div class="col-sm-8">
      <select class="form-control" id="paid_status" name="paid_status"  required>
      	<option  value="<?php print $row['paid_status'];?>"><?php print $row['paid_status'];  ?></option>  
        <option value="paid">paid</option>
        <option value="due">Due</option>
        
      </select>
      </div>
    </div>
    
    <div class="form-group">
    <label class="control-label col-sm-2" for="comments">Comments:</label>
    <div class="col-sm-8">
     <textarea class="form-control" id="comments" name="comments"><?php print $row['comments'];?></textarea>
    </div>
  </div>   
   
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>
