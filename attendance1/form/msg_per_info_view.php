
<?php
  //get id
  $id = $_GET['id'];
    //adding header
  include "../attendance_header.php";
?>
 
  
  //sql query to information of this ID
  $sql = "select * from school_attendance_msg where id=".$id;
  //execute the query
  $result = mysqli_query($con,$sql);
  //fetch the resultset
  $row = mysqli_fetch_array($result);
    
?>


<div class="container">

<hr />  
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>ID:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['stu_id'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Type:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['type'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Description:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['description'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['date'];?></div>

  </div>  
<div style="margin-bottom: 410px;"></div>
  
<?php include "../footer.php"; ?>