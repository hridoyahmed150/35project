
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">

 .navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    border-radius: 0px !important;
    font-size: 11px !important;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }

  .navbar-nav{
    float: right !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }  
</style>

<?php 
  //include database
  include "../db/dbcon.php";
 ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FulKuri School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard.php">Home</a></li>
      <li><a href="school_emp_info.php">Personal Information</a></li>
      <li><a href="school_emp_edu_info.php">Education Information</a></li>
      <li><a href="school_emp_exp_info.php">Experience Information</a></li>
      <li><a href="school_emp_ref_info.php">Reference Information</a></li>
      <li><a href="../logout.php">Logout</a></li>
      <li style="color: #d5d5d5;">Hi ! <?php print $_SESSION['username']; ?></li>
    </ul>
  </div>
</nav>

