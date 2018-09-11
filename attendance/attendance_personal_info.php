<?php @session_start();
    if(isset($_SESSION['username']) && $_SESSION['department']=='attendance'){

 ?>
<?php 
  //add header
  include "attendance_header.php";
  include "pag_attendance_info.php"; 
?>
<div class="well text-center"><h1 style="color:#19bb19">Student/Emplyee Attendence Information</h1></div> 
<div class="container">

<!-- search start -->
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
        border-radius: 8px;
        margin-left: 10px;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Student Using ID ..." />
        <div class="result"></div>
    </div>
<!-- search end -->    
<div align="right"><a href="attendence_add.php" style="margin-right:8px; font-size: 22px;">Add Attendence</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Type</th>
        <th>Student ID</th>
        <th>Emplyee ID</th>
        
        <th>Day</th>
        <th>Status</th>
        <th>Entry Time </th>
        <th>Exit Time</th>
        <th>Action</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    //$sql = "select * from attendance_management_system";
    
    //execute query
    //$result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($nquery)){
		print "
        <tr>
        <th>$row[type]</th>
        <th>
		";
		if($row['stu_id']>0)
		print $row['stu_id'];
		else
		print "-";
		print "
		</th>
		<th>
		";
		if($row['emp_id']>0)
		print $row['emp_id'];
		else
		print "-";
		print "				
		</th>
        <th>$row[day]</th>
         <th>$row[sstatus]</th>
          <th>$row[entry_time]</th>
           <th>$row[exit_time]</th>
         <th><a href='student_per_info_view.php?id=$row[id]'>View</a> | <a href='student_attendance_info_edit.php?id=$row[id]'>Edit</a> | <a href='attendance_per_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
  <!-- pagintion start -->
  <div id="pagination_controls" style="text-align:right;">    <?php echo $paginationCtrls; ?>
    </div>
  <!-- pagination end -->  
</div>
<hr>
<br>
<?php include "../footer.php"; ?>
<!--
   | <a href='student_attendance_info_edit.php?id=$row[id]'>Edit</a> | <a href='attendance_per_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a>
-->


<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>
