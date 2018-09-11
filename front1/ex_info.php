<?php
 include "../db/dbcon.php";
 $cid = $_POST['cid'];
 $company_name = $_POST['company_name'];
 $designation = $_POST['designation'];
 $year = $_POST['year'];
 $salary = $_POST['salary'];
 
 print $sql = "insert into cexpinfo value('',$cid,'$company_name','$designation',$year,$salary,1)";
  
 mysqli_query($con,$sql);
?>