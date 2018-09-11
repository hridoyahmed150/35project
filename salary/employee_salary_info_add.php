<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='salary'){
 ?>
<?php include "employee_header.php"; 
  //include "print.php"; 

?>
<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Add Enployee Salary Information</h2>
<hr />  
  <form action="employee_salary_info_store.php" method="post">
    <div class="form-group">
      <label for="designatio">Designation:</label>
      <select class="form-control" id="designatio" value="<?php print $row['designatio'];  ?>" name="designatio" required>>
        <option value="Designation"> Select Designation</option>
        <option value="Principal">Principal</option>
        <option value="Senior Teacher">Senior Teacher</option>
        <option value="Teacher">Teacher</option>
        <option value="Assistant Teacher">Assistant Teacher</option>
        <option value="Administrator">Administator</option>
        <option value="Admin Assistant">Admin Assistant</option>
        <option value="Office Assistant">Office Assistant</option>
        <option value="Clark">Clark</option>
        <option value="Pion">Pion</option>
      </select>
    </div>
    <div class="form-group">
      <label for="basic_salary">Basic  Salary:</label>
      <input type="text" class="form-control" id="basic_salary" placeholder="Enter Your Basic Aalary" name="basic_salary" required>
    </div>

    <div class="form-group">
      <label for="">House Rent:</label>
      <input type="text" class="form-control" id="house_rent" placeholder="Enter House Rent" name="house_rent" required>
    </div>
    <div class="form-group">
      <label for="">Treatment Allowance:</label>
      <input type="text" class="form-control" id="treatment" placeholder="Enter Treatment Allowance" name="treatment"  required>
    </div>

    <div class="form-group">
      <label for="">Convince:</label>
      <input type="text" class="form-control" id="convince" placeholder="Enter Convince" name="convince" required>
    </div>
	<div class="form-group">
      <label for="">Provident Fund:</label>
      <input type="text" class="form-control" id="provident_fund" placeholder="Enter Provident Fund" name="provident_fund" required>
    </div>
	<div class="form-group">
      <label for="">Bonus:</label>
      <input type="text" class="form-control" id="bonus" placeholder="Enter Bonus" name="bonus" required>
    </div>
    <div class="form-group">
      <label for="">Month:</label>
      <select class="form-control" id="month" name="month"  required>
      	<option value="">Select month</option>
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

    <div class="form-group">
      <label for="">Year:</label>
      <select class="form-control" id="year" name="year"  required>
      	<option value="">Select Year</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
		<option value="2005">2005</option>
        <option value="2006">2006</option>
		<option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
		<option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>

      </select>
    </div>
    <div class="form-group">
      <label for="">Employee ID:</label>
      <select class="form-control" id="employee_id" name="employee_id" value="<?php print $row['employee_id'];  ?>"  required>
        <option value="select Employee ID">Select Employee ID</option>
        <option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>

      </select>
    </div>     
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>