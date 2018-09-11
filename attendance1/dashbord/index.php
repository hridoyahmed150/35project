


<!DOCTYPE html>
<html lang="en">
<head>
  <title>little flovour school</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/calcss.css">
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 
  <script src="css/caljs.js"></script>
  <style type="text/css">
    .dashanchor{
      font-size:24px;
      margin-right:5px;
      margin-top: 10px;
      margin-left: 8px;
     }
    .ancho a{
     text-decoration: none;
     color: white;
     }
   .ancho:hover { 
    border-bottom: 1px solid #fff;
}
   .rightside{
     min-height: 500px;
    }
   .dasimg{ 
   .dasimg {
    width: 280px;
    height: 203px;
}

  </style>
</head>
<body onload="displayCalendar()">
<div class="">      
      <div class="row">
        <div class="col-md-2 bg-dark">
          <div class="text-white">
            <div style="margin-bottom: 10px;margin-left: 44px; padding-top: 16px;"><i class="fa fa-school" style="font-size:44px"></i> </div>
             <div class="ancho"><a href=""><h4><i class="fas fa-tachometer-alt dashanchor"></i>Dashbord</h4></a></div>

            <!------End Dashbord Icon-------->

             <div class="ancho"><a href="../school_attendance_management_system.php"><i class="fas fa-graduation-cap dashanchor"></i></i>Attendence</a></div>
             <!------End Attendence Icon-------->

             <div class="ancho"><a href=""><i class="fas fa-list-ul dashanchor"></i>
             Student <span style="margin-left: 35px;">Information</span></a></div>
              <!------  End Student Information-------->

             <div class="ancho"><a href="../student/studen_personal_info.php"><i class="fas fa-list-ul dashanchor"></i>Teacher<span style="margin-left: 35px;"> Information</span></a></div>
            
            <div class="ancho"><a href="../sms.php"><i class="fas fa-comments dashanchor"></i>SMS</a></div>
          
             <div class="ancho"><a href=""><i class="fas fa-list-ul dashanchor"></i>Dashbord</a></div>

             <!-- 
             <div class="ancho"><a href=""><i class="fas fa-tachometer-alt dashanchor"></i>Dashbord</a></div>
             <div class="ancho"><a href=""><i class="fas fa-tachometer-alt dashanchor"></i>Dashbord</a></div>
             <div class="ancho"><a href=""><i class="fas fa-tachometer-alt dashanchor"></i>Dashbord</a></div>
            <div class="ancho"><a href=""><i class="fas fa-tachometer-alt dashanchor"></i>Dashbord</a></div>
            -->
          </div>
        </div>
        <div class="col-md-10">
          <h2 class="text-warning text-center">LITTLE FLOWER SCHOOL MANAGEMENT SYSTEM</h2>
          <div> 
            <?php
             $cur_date = date('y-m-d')
            ?>
               <span class="bg-warning" style="font-size: 24px; color: #fff; background-color: yellow; border-radius: 8px; padding: 8px;">Today:<?php echo $cur_date;?></span>
          </div>
          <hr>
          <div class="container">
           <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h4 class="font-weight-normal mb-3"><h2><i class="fas fa-chalkboard-teacher"></i>Total Teacher:</h2>
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5  text-center"><span>94</span></h2>
                  <h6 class="card-text"></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                  
                  <h4 class="font-weight-normal mb-3"><h2>Today Present</h2>
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5 text-center">90</h2>
                  <h6 class="card-text"></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                                    
                  <h4 class="font-weight-normal mb-3"><h2>Today Absent</h2>
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5 text-center">4</h2>
                  <h6 class="card-text"></h6>
                </div>
              </div>
            </div>
          </div>
         </div> 
        
         <div class="container">
           <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h2 class="font-weight-normal mb-3"><i class="fas fa-graduation-cap"></i>Total Student
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h2>
                  <h2 class="mb-5  text-center">1200</h2>
                  <h6 class="card-text"></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                  
                  <h2 class="font-weight-normal mb-3">Today Present
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h2>
                  <h2 class="mb-5  text-center">1000</h2>
                  <h6 class="card-text"></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                                    
                  <h2 class="font-weight-normal mb-3">Today Absent
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h2>
                  <h2 class="mb-5 text-center" style="">200</h2>
                  <h6 class="card-text"></h6>
                </div>
              </div>
            </div>
          </div>
         </div>     
       </div>

</div>
</body>
</html>

