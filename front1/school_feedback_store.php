<?php
    //adding header
    include "../header.php";
	//get the input
	$email = $_POST['email'];
	$contact  = $_POST['contact'];
	$subject = $_POST['subject'];
	$comments = $_POST['comments'];
	$cdate = $_POST['cdate'];
	
	//query to store data
	$sql = "insert into school_feedback values('','$email','$contact','$subject','$comments','$cdate',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
?>
<script>
alert("Your Information has been sent");
window.location = 'contact.php';
</script>
<?php	
	//header('location: contact.php');


?>
