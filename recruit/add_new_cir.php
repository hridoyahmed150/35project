<?php 
	//add header
	include "../header/recruit/recruit_header.php";
?>
<script>
	$(document).ready(function(){
		$('#submit').click(function(){
			var job_type = $('#job_type').val();
			var edu_qul = $('#edu_qul').val();
			var rq_exp = $('#rq_exp').val();


			var job_salary = $('#job_salary').val();
			var job_loc = $('#job_loc').val();
			var job_time = $('#job_time').val();
			
						
			$.post(
			'add_new_circular.php',
			{'job_type':job_type,'edu_qul':edu_qul,'rq_exp':rq_exp,'job_salary':job_salary,'job_loc':job_loc,'job_time':job_time},
			function(data){
				window.location='cir_mg_sys.php';	
			}
			
			)
			
		})
	})
		
		
		
	

</script>	
<div class="jumbotron text-center">
  <h1>Add Circular</h1>
  <p>Add circular for new employee</p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      <p>Job Type</p>
      <p>
      <select name="job_type" id="job_type">
      	
      	<option value="Full Time">Full Time</option>
        <option value="Part Time">Part Time</option>
      </select>
      </p>
    </div>
    <div class="col-sm-4">
      
      <p>Educational Qualification</p>
      <p>
		<textarea name="edu_qul" id="edu_qul" required="required"></textarea>     
      </p>
    </div>
    <div class="col-sm-4">
      
      <p>Required Experience</p>
      <p>
      	<textarea name="rq_exp" id="rq_exp" required="required"></textarea>
      </p>
    </div>
  </div>
  
  
  
  <div class="row">
    <div class="col-sm-4">
      
      <p>Job Salary</p>
      <p>
      <input type="text" name="job_salary" id="job_salary" required />
      	
      </p>
    </div>
    <div class="col-sm-4">
      
      <p>Job Location</p>
      <p>
		<textarea name="job_loc" id="job_loc" required="required"></textarea>     
      </p>
    </div>
    <div class="col-sm-4">
      
      <p>Job Time</p>
      <p>
      	<textarea name="job_time" id="job_time" required="required"></textarea>
      </p>
    </div>
  </div> 
  
  
  <div class="row">
    <div class="col-sm-12">
      <input type="button" id="submit" name="submit" value="Add Circular" />
	</div>
  </div>     
</div>