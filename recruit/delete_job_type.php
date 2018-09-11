<?php
	//connect to database
	include "../db/dbcon.php";
	$id = $_GET['id'];
	
	//query to delete record
	$sql = "delete from school_circular where id=".$id;
	//execute the query
	mysqli_query($con,$sql);
	
	

?>
<script>
	window.location="cir_mg_sys.php";
</script>