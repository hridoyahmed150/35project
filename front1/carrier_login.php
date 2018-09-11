<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

  <!-- Header -->

  <header class="header">
      
    <!-- Top Bar -->
    <div class="top_bar">
      <div class="top_bar_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                <ul class="top_bar_contact_list">
                  <li><div class="question">Have any questions?</div></li>
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div>001-1234-88888</div>
                  </li>
                  <li>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <div>info.deercreative@gmail.com</div>
                  </li>
                </ul>
                <div class="top_bar_login ml-auto">
                  <div class="login_button"><a href="#">Register or Login</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>        
    </div>

    <!-- Header Content -->
    <div class="header_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_content d-flex flex-row align-items-center justify-content-start">
              <div class="logo_container">
                <a href="#">
                  <div class="logo_text">Unic<span>at</span></div>
                </a>
              </div>
              <nav class="main_nav_contaner ml-auto">
                <ul class="main_nav">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li class="active"><a href="courses.html">Courses</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="#">Page</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
                <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                <!-- Hamburger -->

                <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                <div class="hamburger menu_mm">
                  <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                </div>
              </nav>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
              <form action="#" class="header_search_form">
                <input type="search" class="search_input" placeholder="Search" required>
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>      
    </div>      
  </header>

  <!-- Menu -->

  <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="search">
      <form action="#" class="header_search_form menu_mm">
        <input type="search" class="search_input menu_mm" placeholder="Search" required>
        <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
          <i class="fa fa-search menu_mm" aria-hidden="true"></i>
        </button>
      </form>
    </div>
    <nav class="menu_nav">
      <ul class="menu_mm">
        <li class="menu_mm"><a href="index.html">Home</a></li>
        <li class="menu_mm"><a href="#">About</a></li>
        <li class="menu_mm"><a href="#">Courses</a></li>
        <li class="menu_mm"><a href="#">Blog</a></li>
        <li class="menu_mm"><a href="#">Page</a></li>
        <li class="menu_mm"><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </div>
  
  <!-- Home -->

  <div class="home">
    <div class="breadcrumbs_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="breadcrumbs">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li>Career</li>
                <li>Apply For Job</li>
                                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>

<?php
	include "../db/dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Login Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body{background-color: #f1f1f1;}
      .bslf{
        width: 350px;
        margin: 120px auto;
        padding: 25px 20px;
        background: #3a1975;
        box-shadow: 2px 2px 4px #ab8de0;
        border-radius: 5px;
        color: #fff;
      }
      .bslf h2{
        margin-top: 0px;
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-radius: 10px;
        border: 1px solid #25055f;
      }
      .bslf a{color: #783ce2;}
      .bslf a:hover{
        text-decoration: none;
        color: #03A9F4;
      }
      .bslf .checkbox-inline{padding-top: 7px;}
    </style>
  </head>
  <body>
   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
      $(document).ready(function(){ 
      $("#submit").click(function(){

          var username=$("#username").val();
          var password=$("#password").val();
          var jid=$("#jid").val();
          
// AJAX code to send data to php file.
        $.ajax({
            type: "POST",
            url: "access.php",
            data: {username:username,password:password,jid:jid},
            //dataType: "JSON",
            success: function(data) {
              if(data==1)
              alert("you did not submit your cv yet");
              else
              window.location = 'edit_personal.php?'+data;
              //$("#romi").html(data);
        //alert("Personal Information Submitted");
        //window.location = 'edit_personal.php';
             //$("#message").html(data);
            //$("p").addClass("alert alert-success");
            },
            error: function(err) {
            alert(err);
            }
        });
      });
      });        
    </script>  
    <div class="bslf">
      <form >
        <input type="hidden" id="jid" name="jid" value="<?php print $_GET['id']; ?>">
        <h2 class="text-center"><a href="personal.php?id=<?php print $_GET['id']; ?>">Please Submit CV</a></h2>       
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" required="required"  name="username" 
                id="username">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" required="required" name="password" 
                id="password" />
        </div>
        <div class="form-group clearfix">

          <!--<label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>-->
          <button  type="button" name="submit" 
                id="submit" class="btn btn-primary pull-right">Edit CV and Submit</button>
        </div>
        <!--
        <div class="clearfix">
          <a href="#" class="pull-left">Forgot Password?</a>
          <a href="#" class="pull-right">Create an Account</a>
        </div>  
        -->      
      </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Footer -->

  <footer class="footer">
    <div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
    <div class="container">
      <div class="row footer_row">
        <div class="col">
          <div class="footer_content">
            <div class="row">

              <div class="col-lg-3 footer_col">
          
                <!-- Footer About -->
                <div class="footer_section footer_about">
                  <div class="footer_logo_container">
                    <a href="#">
                      <div class="footer_logo_text">Unic<span>at</span></div>
                    </a>
                  </div>
                  <div class="footer_about_text">
                    <p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
                  </div>
                  <div class="footer_social">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
                
              </div>

              <div class="col-lg-3 footer_col">
          
                <!-- Footer Contact -->
                <div class="footer_section footer_contact">
                  <div class="footer_title">Contact Us</div>
                  <div class="footer_contact_info">
                    <ul>
                      <li>Email: Info.deercreative@gmail.com</li>
                      <li>Phone:  +(88) 111 555 666</li>
                      <li>40 Baria Sreet 133/2 New York City, United States</li>
                    </ul>
                  </div>
                </div>
                
              </div>

              <div class="col-lg-3 footer_col">
          
                <!-- Footer links -->
                <div class="footer_section footer_links">
                  <div class="footer_title">Contact Us</div>
                  <div class="footer_links_container">
                    <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="#">Features</a></li>
                      <li><a href="courses.html">Courses</a></li>
                      <li><a href="#">Events</a></li>
                      <li><a href="#">Gallery</a></li>
                      <li><a href="#">FAQs</a></li>
                    </ul>
                  </div>
                </div>
                
              </div>

              <div class="col-lg-3 footer_col clearfix">
          
                <!-- Footer links -->
                <div class="footer_section footer_mobile">
                  <div class="footer_title">Mobile</div>
                  <div class="footer_mobile_content">
                    <div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
                    <div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
                  </div>
                </div>
                
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row copyright_row">
        <div class="col">
          <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
            <div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
            <div class="ml-lg-auto cr_links">
              <ul class="cr_list">
                <li><a href="#">Copyright notification</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>