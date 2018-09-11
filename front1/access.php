<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	$jid = $_POST['jid'];
	include "../db/dbcon.php";


	$sql = "select * from cpinfo where email='$username' and password='$password' and cid='$jid'";
	
	$result = mysqli_query($con,$sql);
	$fetch = mysqli_fetch_array($result);
	if(mysqli_num_rows($result)){

		//header('Location: edit_personal.php?id=$jid&username=$username');
		print 'id='.$fetch['id'].'&username='.$username;
		?>

		<?php
	}
	else {

		print 1;
	}
?>