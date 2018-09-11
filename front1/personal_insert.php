<?php
 include "../db/dbcon.php";
 $name = $_POST['name'];
 $cid = $_POST['cid'];

 $father_name = $_POST['father_name'];
 $mother_name = $_POST['mother_name'];
 $present_address = $_POST['present_address'];
 $religions = $_POST['religions'];
 $nationality = $_POST['nationality'];
 $national_id = $_POST['national_id'];

 $gender = $_POST['gender'];

 $marital_status = $_POST['marital_status'];
 $email = $_POST['email'];

$contact = $_POST['contact'];
$password = $_POST['password'];

 $image = '';
 $sql = "insert into cpinfo value('','$cid','$name','$father_name','$mother_name','$present_address','$religions','$nationality','$national_id','$gender','$marital_status','$image','$email','$contact','$password',1)";
 
 mysqli_query($con,$sql);

 $max ="SELECT MAX(id) FROM cpinfo";
 $max1 =mysqli_query($con,$max);
 $max2 =mysqli_fetch_row($max1);
 print 'id='.$max2[0];
 
?>
