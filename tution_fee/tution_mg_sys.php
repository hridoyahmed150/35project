<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='tution_fee'){

 ?>

<?php 
include "tution_fee_header.php"; 
//include "pag_stu_personal_info.php";
include "pag_tution_fee_info.php"; 
?>
<hr />
<div class="container">

<div align="center"><a href="tuition_fee.php"><h1>Add New Tituion Fee</h1></a></div>
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
        border-radius: 8px;
        margin-bottom: 10px;
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
<table class="table table-striped" style="text-align: center;">
	<tr>
		<th>Student ID</th>
		<th>Paid Date</th>
        <th>Paid Month</th>
        <th>Paid Year</th>
        <th>Fee Paid</th>
        <th>Paid Status</th>
        <th>Comments</th>
        <th>Action</th>
    </tr>
    
<?php 	
	
	//sql query for fetching data from table
	$sql = "select * from school_tution_fee" ;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch data from database
	while($row = mysqli_fetch_array($result)){
?>
<script>
	$(document).ready(function(){
		$('#del').click(function(){
			alert("hi");	
			
		})
	});
</script>
	<tr>
		<th><?php print $row['student_id']; ?></th>
		<th><?php print $row['paid_date']; ?></th>
		<th><?php print $row['paid_month']; ?></th>
		<th><?php print $row['paid_year']; ?></th>
		<th><?php print $row['fee_paid']; ?></th>
		 
		<th><?php print $row['paid_status']; ?></th>
		<th><?php print $row['comments']; ?></th>
		<th><a href="tution_per_info_view.php?id=<?php echo $row['id']; ?>">View</a> | <a href="tution_fee_info_edit.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="tution_per_info_delete.php?id=<?php echo $row['id']; ?>"  onclick='return checkDelete()'>Delete</a></th>
        
    </tr>
<?php
	//end of while loop
	}
?>
</table>
<!-- pagintion start -->
	<div id="pagination_controls" style="text-align:right;">		<?php echo $paginationCtrls; ?>
    </div>
  <!-- pagination end -->  
<a href='student_personal_info_edit.php?id=<?php echo $row['id'];?>">Edit</a>
</div>
<br>


<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>






