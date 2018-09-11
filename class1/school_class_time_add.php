<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Class Time Schedule </h2>
<hr />  
  <form action="class_info_store.php" method="post">
    <div class="form-group">
     <label for="pwd">Class Name:</label>
      <select class="form-control" id="cname" name="cname"  required>
      	<option value="">Select Class Name</option>
        <option value="five">Five</option>
        <option value="six">Six</option>
        <option value="seven">Seven</option>
        <option value="eight">Eight</option>
        <option value="nine">Nine</option>
        <option value="ten">Ten</option>
        <option value="eleven">Eleven</option>
        <option value="twelve">Twelve</option>
      </select>
    </div>
    <div class="form-group">
     <label for="pwd">Section:</label>
      <select class="form-control" id="section" name="section"  required>
      	<option value="">Select Section</option>
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
        <option value="d">D</option>
        <option value="e">E</option>
        <option value="f">F</option>
      </select>
    </div>

    <div class="form-group">
     <label for="pwd">Shift:</label>
      <select class="form-control" id="shift" name="shift"  required>
      	<option value="">Shift</option>
        <option value="morning">Morning</option>
        <option value="day">Day</option>
      </select>
    </div>
<div class="form-group">
     <label for="pwd">Subject:</label>
      <select class="form-control" id="subject" name="subject"  required>
      	<option value="">Select Subject</option>
        <option value="Math">Math</option>
        <option value="Bangla">Bangla</option>
        <option value="English">English</option>
        <option value="General Scince">General Scince</option>
        <option value="Islam">Islam</option>
      </select>
    </div>
    <div class="form-group">
     <label for="pwd">Class day:</label>
      <select class="form-control" id="classday" name="classday"  required>
      	<option value="">Select Class day</option>
        <option value="Satarday">Satarday</option>
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Twesday">Twesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Friday">Friday</option>
      </select>
    </div>
    <div class="form-group">
     <label for="pwd">Class Time:</label>
      <input type="text" name="ctime" id="ctime" value="" />
    </div>
    <div class="form-group">
     <label for="pwd">Class Location:</label>
      <select class="form-control" id="location" name="location"  required>
      	<option value="">Select Class Location</option>
        <option value="101">101</option>
        <option value="102">102</option>
        <option value="103">103</option>
        <option value="104">104</option>
        <option value="105">105</option>
        <option value="106">106</option>
      </select>
    </div>
    <div class="form-group">
     <label for="pwd">Class Teacher ID:</label>
      <select class="form-control" id="teacherid" name="teacherid"  required>
      	<option value="">Select Teacher ID</option>
        <option value="101">Abdul Hakim</option>
        <option value="102">Abdul Anis</option>
        <option value="103">Abdul Zabbar</option>
        <option value="104">Abdul Mofiz</option>
        <option value="105">Abdul Kashem</option>
        <option value="106">Abdul Rahman</option>
      </select>
    </div> 
    <button type="submit" class="btn btn-default">Submit</button>
    
    </form>
    </div>