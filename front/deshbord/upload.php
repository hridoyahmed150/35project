<?php 

require "../functions.php";
$heading=$_POST['heading'];
$content=$_POST['content'];
$img = $_FILES["file"];
$img_type=$_FILES["file"]['type'];
$img_name=$_FILES["file"]['name'];
$temp_img=$_FILES["file"]['tmp_name'];
$file_ext=explode('.',$img_name);
$file_ext=strtolower(end($file_ext));
$allowed=array('jpg','jpeg','png');
if (in_array($file_ext,$allowed)) {
	move_uploaded_file($temp_img, 'upload/'.$img_name);
	echo 'success';
}else{
	echo "somthing missing";
}
send_data("insert into image values('','$img_name','$content','$heading')");