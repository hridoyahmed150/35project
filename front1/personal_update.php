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

 $search = "select * from cpinfo where id='$cid' and email='$email'";
 $res = mysqli_query($con,$search);
 $fetch = mysqli_fetch_array($res);
 
 if(mysqli_num_rows($res)>=1)
{
$sql = "update cpinfo 
set

name='$name',
father_name='$father_name',
mother_name='$mother_name',
present_address='$present_address',
religions='$religions',
nationality='$nationality',
national_id='$national_id',
gender='$gender',
marital_status='$marital_status',
image='$image',

contact='$contact',
password='$password'
where cid='$cid' and email='$email'
";
mysqli_query($con,$sql);
print 'id='.$fetch['id'];
}
else {
 $sql = "insert into cpinfo value('','$cid','$name','$father_name','$mother_name','$present_address','$religions','$nationality','$national_id','$gender','$marital_status','$image','$email','$contact','$password',1)";
 
 mysqli_query($con,$sql);
 print 'id='.$fetch['id'];
 }
?>
