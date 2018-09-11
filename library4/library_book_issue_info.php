<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; 

	include "pag_lib_book_issue_info.php";
?>
<?php
    //adding header
    include "../header.php";
?>
<div class="container">
<hr />
<h1>Library Book Issue Information</h1>
<hr />
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
            $.get("backend-search-book-issue-info.php", {term: inputVal}).done(function(data){
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
        <input type="text" autocomplete="off" placeholder="Search Student Using Name ..." />
        <div class="result"></div>
    </div>
<!-- search end --> 
<div align="right"><a href="library_book_issue_info_add.php">Add Book Issue</a></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Member Id</th>
        <th>Book Id</th>
        <th>Book Issue Date</th>
        <th>Returning Date</th>
        
      </tr>
    </thead>
	<?php
    //adding header
    include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_books_issue_management_system";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[member_id]</th>
        <th>$row[book_id]</th>
        <th>$row[book_issue_date]</th>
		<th>$row[returning_date]</th>
		
        <th><a href='library_book_issue_info_view.php?id=$row[id]'>View</a> | <a href='library_book_issue_info_edit.php?id=$row[id]'>Edit</a> | <a href='library_book_issue_info_delete.php?id=$row[id]'onclick='return checkDelete()'>Delete</a> | <a href='library_message_delivery_info.php?id=$row[id]'>Message</a></th>
        
      </tr>";
    }
    ?>
    </tbody>
  </table>
  <!-- pagintion start -->
	<div id="pagination_controls" style="text-align:right;"><?php echo $paginationCtrls; ?>
    </div>
  <!-- pagination end --> 
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>


