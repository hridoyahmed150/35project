 <?php 
  //add header
  include "../attendance_header.php";
?>
<div class="container">
  <div class="well text-center text-success"><h2>Write Massage</h2></div> 
  <div class="row">
    <form class="form-horizontal" action="school_attendance_msg_add.php" method="post">
      <div class="form-group">
        <label class="control-label col-sm-2" for="id">ID:</label>
        <div class="col-sm-6">
          <input type="id" name="stuid" class="form-control" id="id" placeholder="Enter ID" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="type">Type:</label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="type" placeholder="Enter type" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="description">Description:</label>
        <div class="col-sm-6"> 
        
         <textarea class="form-control" rows="5" name="description"> </textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="type">Type:</label>
        <div class="col-sm-6">
          <input class="form-control" type="date" name="date" placeholder="date" required>
        </div>
      </div>
      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-6">
          <!-- <button type="submit" >Submit</button> -->
          <input type="submit" name="submit" class="btn btn-info" value="Submit">
        </div>
      </div>
    </form>
  </div>
</div>
