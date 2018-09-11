<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='salary'){
 ?>
<?php include "employee_header.php"; 
  //include "print.php"; 

?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$designatio = $_POST['designatio'];
	$basic_salary = $_POST['basic_salary'];
	$house_rent = $_POST['house_rent'];
	$treatment = $_POST['treatment'];
	$convince = $_POST['convince'];
	$provident_fund = $_POST['provident_fund'];
	$bonus = $_POST['bonus'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$employee_id = $_POST['employee_id'];
	
	//query to store data
	print $sql = "
	update salary_management_system 
	set	
	designatio = '$designatio',
	basic_salary =$basic_salary,
	house_rent =$house_rent,
	treatment = $treatment,
	convince = $convince,
	provident_fund = $provident_fund,
	bonus = $bonus,
	month = '$month',
	year = $year,
	employee_id = $employee_id
	where id =".$_POST['id'];
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: employee_salary_info.php');


?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>