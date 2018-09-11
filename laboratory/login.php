  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<?php
	include "db/dbcon.php";
?>
<div class="container" style="margin-top:100px;">
	SignIn/Log In
	<hr />
    <form action="" method="post">
        <div class="row">
            <div class="col-md-8">
                User Name: <input type="text" name="username" 
                id="username" />
            </div>
            <div  class="col-md-8"></div>
            <div class="col-md-8">
                Password: <input type="password" name="password" 
                id="password" />
            </div> 
            <div class="col-md-8">
                <input type="submit" name="submit" 
                id="submit" value="submit" />
            </div>           		
        </div>
    </form>
</div>

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
		}
		else {
			print "Username or Password is not correct";	
		}
	}

?>

