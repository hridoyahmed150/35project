<?php
 include "../db/dbcon.php";
	$cid = $_POST['cid'];
	$exam_type = $_POST['exam_type'];
	$passing_year = $_POST['passing_year'];
	$board_uni = $_POST['board_uni'];

 $search = "select * from ceduinfo where cid='$cid'";
 $res = mysqli_query($con,$search);
 $fetch = mysqli_fetch_array($res);
 
 if(mysqli_num_rows($res)>=1)
{
$sql = "update ceduinfo 
set exam_type='$exam_type',
passing_year='$passing_year',
board_uni='$board_uni' where cid=$cid
";
mysqli_query($con,$sql);
print 'id='.$_POST['cid'];
}
else {
 $sql = "insert into ceduinfo values('',$cid,'$exam_type','$passing_year','$board_uni','rr',1)";
 
 mysqli_query($con,$sql);
 print 'id='.$_POST['cid'];
 }
?>
