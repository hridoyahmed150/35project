<?php 

// require "connet.php";
function connect($host="localhost",$user="root",$pass="Hridoy",$db="35project"){
	$con = new mysqli($host, $user,$pass, $db);
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	 return $con;
}

// for insert data from database 
// for retrive data from database 

// echo $con;
function select($q){
	// connect();
	$result = connect()->query($q);
	$array=[];
    while ($row = $result->fetch_object()){
    	$array[]=$row;
    } 
    return $array;
}
function send_data($q){
	connect()->query($q);
}


