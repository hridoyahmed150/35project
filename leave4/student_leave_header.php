<?php @session_start() ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Little Flower School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard.php">Home</a></li>
      <li><a href="employee_leave_info.php">Employee Leave Info</a></li>
      <li><a href="notice_info.php">Notice Info</a></li>
      <li><a href="../logout.php">Logout</a>
</li>
    </ul>
  </div>
</nav>
<div style="padding-left: 800px;">HI  ! <?php 
print @$_SESSION['username'];  ?>
</div>
