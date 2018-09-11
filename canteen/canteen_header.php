
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">XYZ School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard.php">Home</a></li>
      <li><a href="school_canteen_info.php">Canteen Info</a></li>
      <!--
      <li><a href="studen_education_info.php">Student Info</a></li>
      <li><a href="#">Employee Info</a></li>
      <li><a href="studen_notic_info.php">Notic Info</a></li>
      -->
      <li><a href="../logout.php">Logout</a>
</li>
    </ul>
  </div>
</nav>
<div style="padding-left: 800px;" align="right">Hi ! <?php print @$_SESSION['username'];  ?></div>
     