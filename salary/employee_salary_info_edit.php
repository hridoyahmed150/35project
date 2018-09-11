<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='salary'){
 ?>
 <?php
 //adding header
    include "employee_header.php";
  //Get id of url
 ?>
<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from salary_management_system where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Add Salary Information</h2>
<hr />  
  <form action="employee_salary_info_update.php" method="post">
  <input type="hidden" class="form-control" id="id" value="<?php print $row['id']; ?>" required>
    
    <div class="form-group">
      <label for="designatio">Designation:</label>
      <select class="form-control" id="designatio" value="<?php print $row['designatio'];  ?>" name="designatio" required>
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
      <input type="text" class="form-control" id="basic_salary" value="<?php print $row['basic_salary'];  ?>" name="basic_salary" required>
    </div>

    <div class="form-group">
      <label for="">House Rent:</label>
      <input type="text" class="form-control" id="house_rent" value="<?php print $row['house_rent'];  ?>" name="house_rent" required>
    </div>
    <div class="form-group">
      <label for="">Treatment Allowance:</label>
      <input type="text" class="form-control" id="treatment" value="<?php print $row['treatment'];  ?>" name="treatment"  required>
    </div>

    <div class="form-group">
      <label for="">Convince:</label>
      <input type="text" class="form-control" id="convince" value="<?php print $row['convince'];  ?>" name="convince" required>
    </div>
	<div class="form-group">
      <label for="">Provident Fund:</label>
      <input type="text" class="form-control" id="provident_fund" value="<?php print $row['provident_fund'];  ?>" name="provident_fund" required>
    </div>
	<div class="form-group">
      <label for="">Bonus:</label>
      <input type="text" class="form-control" id="bonus" value="<?php print $row['bonus'];  ?>" name="bonus" required>
    </div>
    <div class="form-group">
      <label for="">Month:</label>
      <select class="form-control" id="month" name="month"  required>
      	<option value="<?php print $row['month'];  ?>"><?php print $row['month'];  ?></option>
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
      	<option value="<?php print $row['year'];  ?>"><?php print $row['year'];  ?></option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
		<option value="2005">2005</option>
        <option value="2006">2006</option>
		<option value="2007">2007</option>
        <option value="2008">2008</option>
		<option value="2017">2017</option>
        <option value="2018">2018</option>
		<option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
		<option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
		<option value="2025">2025</option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Employee ID::</label>
      <select class="form-control" id="employee_id" name="employee_id" value="<?php print $row['employee_id'];  ?>"required>
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
</div>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>