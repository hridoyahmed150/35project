<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='tution_fee'){

 ?>
<?php 
  //add header
  include "tution_fee_header.php";
  include "../header.php";
?>




<div class="well text-center"><h2 style="color: green">Tution Fee</h2></div>
<form class="form-horizontal" action="tution_fee_info_add.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_id">Student ID:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="student_id" name="student_id" placeholder="Enter ID" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="paid_date">Date:</label>
    <div class="col-sm-8"> 
      <input type="date" class="form-control" id="paid_date" name="paid_date" placeholder="date" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="paid_month" >Month:</label>
    <div class="col-sm-8"> 
       <select class="form-control" id="paid_month" name="paid_month">
        <option value="">Select Month</option>
        <option value="January">January</option>
        <option value="February">February</option>
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
    <label class="control-label col-sm-2" for="year">Year:</label>
      <div class="col-sm-8"> 
       <select class="form-control" id="paid_year" name="paid_year">
        <option value="">Select Year</option>
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
    <label class="control-label col-sm-2" for="fee_amount">Amount:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="fee_paid" name="fee_paid" placeholder="" required>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="paid_status">Paid Status:</label>
    <div class="col-sm-8">
     <div class="radio">
  <label><input type="radio" value="advance" id="paid_status" name="paid_status">Advance</label>
</div>
<div class="radio">
  <label><input type="radio" value="Due" id="paid_status" name="paid_status">Due</label>
</div>
</div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="comments">Comments:</label>
    <div class="col-sm-8">
     <textarea class="form-control" id="comments" name="comments"></textarea>
    </div>
  </div>

  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" id="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>
