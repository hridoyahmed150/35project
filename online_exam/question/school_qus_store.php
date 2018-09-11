<?php //@session_start();
	//if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$class = $_POST['class'];
	$subject = $_POST['subject'];
	$question = $_POST['question'];
	$correct_answer = $_POST['correct_answer'];
	$marks = $_POST['marks'];
	
	//query to store data
	$sql = "insert into school_online_question values('','$class','$subject','$question','$correct_answer','$marks',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:school_qus_info.php');


?>
<?php //} //else {
	//print "Please <a href='../login.php'>Login</a> to enter this page";	
//}
?> 