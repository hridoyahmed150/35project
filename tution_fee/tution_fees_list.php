<?php @session_start();
  if(isset($_SESSION['username']) && $_SESSION['department']=='tution_fee'){

 ?>
<?php 
include "tution_fee_header.php"; 
?>
<div class="container text-center">
  <h2>Class Fees List</h2>           
  <table class="table table-bordered text-center">
    <thead class="text-center">
      <tr>
        <th class="text-center">Class</th>
        <th class="text-center">Monthlay Fee</th>
        <th class="text-center">Examination Fee</th>
        <th class="text-center">Other Fee</th>
        <th class="text-center lead">Total Fee</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>One</td>
        <td>400</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1020</td>
      </tr>
      <tr>
        <td>Two</td>
        <td>400</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1020</td>
      </tr>
      <tr>
        <td>Three</td>
        <td>400</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1020</td>
      </tr>
       <tr>
        <td>Four</td>
        <td>400</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1020</td>
      </tr>
      <tr>
        <td>Five</td>
        <td>500</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1400</td>
      </tr>
      <tr>
        <td>Six</td>
        <td>500</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1240</td>
      </tr>
      <tr>
        <td>Seven</td>
        <td>500</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1240</td>
      </tr>
      <tr>
        <td>Eight</td>
        <td>700</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1240</td>
      </tr>
       <tr>
        <td>Nine</td>
        <td>700</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1240</td>
      </tr>
      <tr>
        <td>Ten</td>
        <td>900</td>
        <td>500</td>
        <td>120</td>
        <td class="lead">1240</td>
      </tr>
    </tbody>
  </table>
</div>
<div style="margin-bottom: 70px;"></div>
<?php include "../footer.php"; ?>
<?php } else {
  print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
  ?>
