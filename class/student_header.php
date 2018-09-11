
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<nav class="navbar navbar-default">
  <div class="container-fluid" style="background-color: #999999">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: #990000">Little Flower School</a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li class="active"><a href="dashboard.php">Home</a></li>
      <li><a href="school_time_info.php" style="color: #990000">Class Time Management</a></li>
      <li><a href="school_event_info.php" style="color:#990000">Event Entry</a></li>
      <li><a href="event_info.php" style="color:#990000">Participant's Entry</a></li>
      
      <li><a href="../logout.php" style="color: #990000">Logout</a>
</li>
    </ul>
  </div>
</nav>
<?php include "../db/dbcon.php"; ?>
<div style="padding-left: 900px; color:#660000; font-size:14px;">Hi !<?php print @$_SESSION['username'];  ?></div>

