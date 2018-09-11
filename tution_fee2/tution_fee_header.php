
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header text-success">
      <a class="navbar-brand" href="#">Little Flower School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a class="" href="dashboard.php">Home</a></li>
      <li><a href="tuition_fee.php">Tution Fee</a></li>
      <li><a href="tution_fees_list.php">Fee List</a></li>
      <li><a href="../student/studen_personal_info.php">Student info</a></li>
      <li><a href="sms.php">SMS</a></li>
      <li><a href="../logout.php">Logout</a>
</li>
    </ul>
  </div>
</nav>
<div style="padding-left: 800px;">Hi ! <?php print @$_SESSION['username'];  ?></div>


