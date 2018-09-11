
<?php 
  //add header
  include "../header/tution_fee/tution_fee_header.php";
?>
<script>
	$(document).ready(function(){
		$('#submit').click(function(){
			var student_id= $('#student_id').val();
			var date = $('#date').val();
			var month = $('#month').val();


			var year = $('#year').val();
			var fee_amount = $('#fee_amount').val();
			var paid_status = $('#paid_status').val();
      var comments = $('#comments').val();
			
						
			$.post(
			'add_new_tuition_fee.php',
			{'student_id':student_id,'date':date,'month':month,'year':year,'fee_amount':fee_amount,'paid_status':paid_status,'comments':comments},
			function(data){
				window.location='tution_mg_sys.php';	
			}
			
			)
			
		})
	})
		</script>





<div class="well text-center"><h2 style="color: green">Tution Fee</h2></div>
<form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_id">Student ID:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="student_id" placeholder="Enter ID" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date">Date:</label>
    <div class="col-sm-8"> 
      <input type="date" class="form-control" id="date" placeholder="date" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="month">Month:</label>
    <div class="col-sm-8"> 
       <select class="form-control" id="month">
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
    <label class="control-label col-sm-2" for="year">Year:</label>
      <div class="col-sm-8"> 
       <select class="form-control" id="year">
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
      <input type="number" class="form-control" id="fee_amount" placeholder="" required>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="paid_status">Paid Status:</label>
    <div class="col-sm-8">
     <div class="radio">
  <label><input type="radio" name="optradio" value="Paid" id="C">Paid</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="Due" id="paid_status">Due</label>
</div>
</div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="comments">Comments:</label>
    <div class="col-sm-8">
     <textarea class="form-control" id="comments"></textarea>
    </div>
  </div>

  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" id="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>

