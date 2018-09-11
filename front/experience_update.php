<?php
 include "../db/dbcon.php";
	$cid = $_POST['cid'];
 $company_name = $_POST['company_name'];
 $designation = $_POST['designation'];
 $year = $_POST['year'];
 $salary = $_POST['salary'];

 $search = "select * from cexpinfo where cid='$cid'";
 $res = mysqli_query($con,$search);
 $fetch = mysqli_fetch_array($res);
 
 if(mysqli_num_rows($res)>=1)
{
print $sql = "update cexpinfo set company_name='$company_name',
designation='$designation',year=$year,
salary=$salary where cid=$cid
";
mysqli_query($con,$sql);
print 'id='.$_POST['cid'];
}
else {
 $sql = "insert into cexpinfo value('',$cid,'$company_name','$designation',$year,$salary,1)";
 
 mysqli_query($con,$sql);
 print 'id='.$_POST['cid'];
 }
?>
