<?php 
global $con;
$con = new mysqli("localhost", "root", "Hridoy", "35project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }