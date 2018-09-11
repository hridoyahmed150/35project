<?php
	include "login_design.php";
?>

<?php
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password = $_POST['password'];
		//sql query to information of this ID
		print $sql = "select * from school_user_info where username='$username' and password='$password'";	
		//execute the query
		$result = mysqli_query($con,$sql);
		//fetch the resultset
		$row = mysqli_fetch_array($result);
		
		if(mysqli_num_rows($result))
		{
			$_SESSION['username'] = $row['username'];
			$_SESSION['department'] = $row['department'];
			if($_SESSION['department']=='student'){
				header('location: student/dashboard.php');
			}
			elseif($_SESSION['department']=='employee'){
				header('location: employee/dashboard.php');
			}
			elseif($_SESSION['department']=='notice'){
				header('location: notice/dashboard.php');
			}						
			elseif($_SESSION['department']=='laboratory'){
				header('location: laboratory/dashboard.php');
			}
			elseif($_SESSION['department']=='parent'){
				header('location: parent/dashboard.php');
			}
			elseif($_SESSION['department']=='admission'){
				header('location: admission/dashboard.php');
			}
			elseif($_SESSION['department']=='transport'){
				header('location: transport/dashboard.php');
			}
			elseif($_SESSION['department']=='result'){
				header('location: result/dashboard.php');
			}
			elseif($_SESSION['department']=='canteen'){
				header('location: canteen/dashboard.php');
			}
			elseif($_SESSION['department']=='library'){
				header('location: library/dashboard.php');
			}
			elseif($_SESSION['department']=='leave'){
				header('location: leave/dashboard.php');
			}
			elseif($_SESSION['department']=='member'){
				header('location: member/dashboard.php');
			}
			elseif($_SESSION['department']=='attendance'){
				header('location: attendance/dashboard.php');
			}
			elseif($_SESSION['department']=='tution_fee'){
				header('location: tution_fee/dashboard.php');
			}
			elseif($_SESSION['department']=='class'){
				header('location: class/dashboard.php');
			}	
			elseif($_SESSION['department']=='event'){
				header('location: event/dashboard.php');
			}	
			elseif($_SESSION['department']=='feedback'){
				header('location: feedback/dashboard.php');
			}
			elseif($_SESSION['department']=='online_exam'){
				header('location: online_exam/dashboard.php');
			}
			elseif($_SESSION['department']=='circular'){
				header('location: circular/dashboard.php');
			}
			elseif($_SESSION['department']=='laboratory'){
				header('location: laboratory/dashboard.php');
			}
			elseif($_SESSION['department']=='accounts'){
				header('location: accounts/dashboard.php');
			}
			elseif($_SESSION['department']=='salary'){
				header('location: salary/dashboard.php');
			}			
			elseif($_SESSION['department']=='user_manage'){
				header('location: user_management/dashboard.php');
			}																																																							
		}
		else {
			print "Username or Password is not correct";	
		}
	}

?>

