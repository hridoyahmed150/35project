<?php
    //adding header
    include "../header.php";
  //Get id of url
  $id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_lab_euipment_distribution where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
  //fetch from table
  $row=mysqli_fetch_array($result);     
?>  


<div class="container">
<hr />
  <h2>Lab Distribution</h2>
<hr />  
  <form action="school_lab_equipment_distribution_update.php" method="post">
  <input type="hidden" name="id" id="id" 
  value="<?php print $_GET['id']; ?>" />
    <div class="form-group">
        <label for="student_id">Student ID:</label>
        <select class="form-control" id="student_id" 
         name="student_id" value = "<?php print $row['student_id']; ?>" 
        required>
              <option value="<?php print $row['student_id']; ?>"><?php print $row['student_id']; ?></option>
              <option value="101">101</option>
              <option value="103">103</option>
              <option value="104">104</option>
              <option value="105">105</option>
              <option value="106">106</option>
              <option value="107">107</option>
              <option value="108">108</option>
              <option value="109">109</option>
              <option value="110">110</option>
              <option value="111">111</option>
              <option value="112">112</option>
              <option value="113">113</option>
          </select>
    </div>
    <div class="receive_date">
      <label for="receive_date">Receive Date:</label>
      <input type="date" class="form-control" id="receive_date" placeholder="Receive Date:" name="receive_date" value = "<?php print $row['receive_date']; ?>" required>
    </div>
    <div class="submission_date">
      <label for="submission_date">Submission Date:</label>
      <input type="date" class="form-control" id="submission_date" placeholder="Submission Date:" name="submission_date" value = "<?php print $row['submission_date']; ?>" required>
    </div>

    <div class="form-group">
        <label for="equipment_id">Equipment ID:</label>
        <select class="form-control" id="equipment_id" 
         name="equipment_id" value = "<?php print $row['equipment_id']; ?>" required>
              <option value="<?php print $row['equipment_id']; ?>"><?php print $row['equipment_id']; ?></option>
              <option value="101">101</option>
              <option value="103">103</option>
              <option value="104">104</option>
              <option value="105">105</option>
              <option value="106">106</option>
              <option value="107">107</option>
              <option value="108">108</option>
              <option value="109">109</option>
              <option value="110">110</option>
              <option value="111">111</option>
              <option value="112">112</option>
              <option value="113">113</option>
          </select>
    </div>
    
   


    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>