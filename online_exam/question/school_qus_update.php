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
	$id = $_POST['id'];
	
	//query to store data
	print $sql = "
	update school_qus_info 
	set
	class = '$class',
	subject = '$subject',
	question = '$question',
	correct_answer = '$correct_answer',
	marks = '$marks'
	where id =".$id;
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location:school_qus_info.php');


?>

<?php //} //else {
	//print "Please <a href='../login.php'>Login</a> to enter this page";	
//}
	?>