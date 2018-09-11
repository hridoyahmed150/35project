<?php
 include "../db/dbcon.php";

	$cid = $_POST['cid'];
	$exam_type = $_POST['exam_type'];
	$passing_year = $_POST['passing_year'];
	$board_uni = $_POST['board_uni'];
	$sql = "insert into ceduinfo values('',$cid,'$exam_type','$passing_year','$board_uni','rr',1)";
	
 mysqli_query($con,$sql);

	 $max ="SELECT MAX(id) FROM cpinfo";
 $max1 =mysqli_query($con,$max);
 $max2 =mysqli_fetch_row($max1);
 print 'id='.$max2[0];
	 
	
	
?>