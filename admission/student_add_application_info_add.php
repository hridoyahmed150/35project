<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='admission'){

 ?>
<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Add Student's Required Information</h2>
<hr />  
  <form action="student_add_application_info_store.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="student_name" placeholder="Enter name" name="student_name" required>
    </div>
    <div class="form-group">
      <label for="fn">Father's Name:</label>
      <input type="text" class="form-control" id="father_name" placeholder="Father's Name" name="father_name" required>
    </div>

    <div class="form-group">
      <label for="mn">Mother's Name:</label>
      <input type="text" class="form-control" id="mother_name" placeholder="Mother's Name" name="mother_name" required>
    </div>
     <div class="form-group">
  <label for="pa">Present Address:</label>
  <textarea class="form-control" rows="5" id="present_address"  placeholder="Present Address" name="present_address" required></textarea>
</div> 

     <div class="form-group">
  <label for="pmnt">Permanent Address:</label>
  <textarea class="form-control" rows="5" id="permanent_address"  placeholder="Permanent Address" name="permanent_address" required></textarea>
</div> 
    <div class="form-group">
      <label for="r">Religion:</label>
      <select class="form-control" id="religion" name="religion"  required>
      	<option value="">Select Religion</option>
        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddhist">Buddhist</option>
        <option value="Christian">Christian</option>
      </select>
    </div>

    <div class="form-group">
      <label for="">Gender:</label>
      <select class="form-control" id="gender" name="gender"  required>
      	<option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Common">Common</option>
      </select>
    </div>
    <div class="form-group">
      <label for="db">Date of Birth:</label>
      <input type="date" class="form-control" id="date_of_birth" placeholder="" name="date_of_birth" required>
    </div>

    <div class="form-group">
      <label for="pb">Place Of Birth:</label>
      <input type="text" class="form-control" id="place_of_birth" placeholder="Place Of Birth" name="place_of_birth" required>
    </div>
    
    <div class="form-group">
      <label for="pb">Blood Group:</label>
      <select name='blood_group' id='blood_group' class="form-control">
      <option value="">Select Blood Group</option>
      	<option value="A+">A+</option>
      	<option value="A-">A-</option>
      	<option value="B+">B+</option>
      	<option value="B-">B-</option>
      	<option value="O+">O+</option>
      	<option value="O-">O-</option>
      	<option value="AB+">AB+</option>      	
        <option value="AB-">AB-</option>                        
                        
      </select>
    </div>    
    <div class="form-group">
      <label for="psn">Previous School Name:</label>
      <input type="text" class="form-control" id="previous_school_name" placeholder="Previous School Name" name="previous_school_name" required>
    </div>
        <div class="form-group">
      <label for="rlps">Reason of Leaving Previous School:</label>
      <input type="textarea" class="form-control" id="reason_of_leaving_previous_school" placeholder="Reason of Leaving Previous School" name="reason_of_leaving_previous_school" required>
    </div>
    <div class="form-group">
      <label for="rps">Reasult of Previous School:</label>
      <input type="text" class="form-control" id="result_of_previous_school" placeholder="Reasult of Previous School" name="result_of_previous_school">
    </div>
    <div class="form-group">
      <label for="fec">First Enrolled Class:</label>
      <select class="form-control" id="first_enrolled_class" placeholder="First Enrolled Class" name="first_enrolled_class">
      	<option value="">Select</option>	   
        <option value="One">One</option>	
        <option value="Two">Two</option>	
        <option value="Three">Three</option>	
        <option value="Four">Four</option>	
        <option value="Five">Five</option>	
        <option value="Six">Six</option>	
        <option value="Seven">Seven</option>	
        <option value="Eight">Eight</option>	
        <option value="Nine">Nine</option>	
        <option value="Ten">Ten</option>	
      
      
      </select>
    </div>
<div class="form-group">
      		<label for="email">Email:</label>
      		<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    	</div>
<div class="form-group">
      		<label for="contact_no">Contact:</label>
      		<input type="contact_no" class="form-control" id="contact_no" placeholder="Enter Contact Number" name="contact_no" required>
    	</div>   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>