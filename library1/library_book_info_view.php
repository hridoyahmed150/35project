<?php
	//get id
	$id = $_GET['id'];
    //adding header
    include "../header.php";
	
	//sql query to information of this ID
	$sql = "select * from school_lib_books_infor_entry_system where id=".$id;
	//execute the query
	$result = mysqli_query($con,$sql);
	//fetch the resultset
	$row = mysqli_fetch_array($result);
		
?>
<div class="container">
<hr />
<h1>Student Personal Information Detils</h1>
<hr />	
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Boook Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['boook_name'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Publisher Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['publisher_name'];?></div>

  </div>  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Date:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['cdate'];?></div>

    <div class="col-sm-3 col-md-3" style="background-color:"><b>Author Name:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['author_name'];?></div>

  </div>  
  
<hr />
  <div class="row">
    <div class="col-sm-3 col-md-3" style="background-color:"><b>Quantity:</b> </div>
    <div class="col-sm-3 col-md-3" style="background-color:"><?php print $row['quantity'];?></div>


</div>