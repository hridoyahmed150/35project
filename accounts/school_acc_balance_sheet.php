<?php 
@session_start();
    if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){
 ?>

<?php include "accounts_header.php"; ?>

<div class="container">
<hr />
<h2><center>Account Management System</center></h2>
<h3><center><b>Balance Sheet</b></center></h3>
<hr />
<div align="right"><h4><a href="school_acc_balance_sheet_add.php">Add Data</a></h4></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Date</th>
        <th>Description</th>
        <th>Total Balance</th>
        <th>Action</th>       
      </tr>
    </thead>
	<?php
    //adding header
    //include "../header.php";
    
    //fetch data from table query
    $sql = "select * from school_acc_balance_sheet";
    
    //execute query
    $result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($result)){
		print "
        <tr>
        <th>$row[date]</th>
        <th>$row[description]</th>
        <th>$row[total_balance]</th>
        <th><a href='school_acc_balance_sheet_view.php?id=$row[id]'>View</a> | <a href='school_acc_balance_sheet_edit.php?id=$row[id]'>Edit</a> | <a href='school_acc_balance_sheet_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>
</div>

<?php include "../footer.php"; ?>

<?php  } else {
    print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>



