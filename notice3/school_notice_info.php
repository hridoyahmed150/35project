<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='notice'){

 ?>
 <?php include "student_header.php"; ?>
<?php include "pag_school_notice_info.php"; ?>
<div class="container">
<hr />
<h1>Notice Information</h1>
<hr />
<!-- search start -->
<style type="text/css">pag_school_notice_info
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
            $.get("backend-search_id.php", {term: inputVal}).done(function(data){
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
<hr />
<div align="right"><a href="notice.php">Add Notice</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Type</th>
        <th>Publish Date</th>
        <th>Subject</th>
        <th>Action</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_notice";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[type]</th>
        <th>$row[publish_date]</th>
        <th>$row[subject]</th>
        <th><a href='notice_view.php?id=$row[id]'>View</a> | <a href='notice_edit.php?id=$row[id]'>Edit</a> | <a href='school_notice_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>
<!-- pagintion start -->
	<div id="pagination_controls" style="text-align:right;"><?php echo $paginationCtrls; ?>
    </div>
  <!-- pagination end -->  
</div>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>



