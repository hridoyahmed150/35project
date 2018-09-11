<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2 align="center" style="color:#660000">Class Time Schedule </h2>
<hr />  
  <form action="class_info_store.php" method="post">
    <div class="form-group">
     <label for="pwd">Class Name:</label>
      <select class="form-control" id="cname" name="cname"  required>
      	<option value="">Select Class Name</option>
        <option value="Five">Five</option>
        <option value="Six">Six</option>
        <option value="Seven">Seven</option>
        <option value="Eight">Eight</option>
        <option value="Nine">Nine</option>
        <option value="Ten">Ten</option>
        <option value="Eleven">Eleven</option>
        <option value="Twelve">Twelve</option>
      </select>
    </div>
    <div class="form-group">
     <label for="pwd">Section:</label>
      <select class="form-control" id="section" name="section"  required>
      	<option value="">Select Section</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div>

    <div class="form-group">
     <label for="pwd">Shift:</label>
      <select class="form-control" id="shift" name="shift"  required>
      	<option value="">Shift</option>
        <option value="Morning">Morning</option>
        <option value="Day">Day</option>
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