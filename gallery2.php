<?php session_start();
if($_SESSION['username']==true||$_SESSION['s_name']==true)
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GNITS : Gallery</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
  <header id="header" >
      <!-- BEGIN MENU -->
      <div class="menu_area" >
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header" >
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
          <!--    <a class="navbar-brand" href="index.html" ><img src="img/logo.png" alt="logo" ></a>-->
              <!-- TEXT BASED LOGO -->
               <a class="navbar-brand" href="index.html" ><img src="img/logo.jpg" alt="logo" ></a>
              <a class="navbar-brand" href="F:\website\college website/index.html"><span> G. NARAYANAMMA INSTITUTE OF TECHNOLOGY AND SCIENCE</span></a>
              <!-- IMG BASED LOGO  -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="index2.html">Home</a></li>
                 <li><a href="institute2.php">Institute</a></li>
                <li><a href="course-archive2.php">Courses</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dashboard<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="f_dash.php">Faculty</a></li>
                    <li><a href="s_dash.php">Student</a></li>
                     <li><a href="p_dash.php">Parent</a></li>
                    </ul>
                </li>
                <li><a href="logout.php">Logout</a></li>
                <li class="active"><a href="gallery2.php">Gallery</a></li>
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Resources<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   <li><a href="http://www.gnits.ac.in/?q=NPTEL">NPTEL</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=internet">Internet Center</a></li>
                     <li><a href="http://www.gnits.ac.in/?q=library">Library</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=busserv">Bus Services</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=hostel">Hostel</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=sports">Sports</a></li>
                     <li><a href="http://www.gnits.ac.in/?q=campuslife">Campus life</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=onlineresources">Online Resources</a></li>
                     <li><a href="http://www.gnits.ac.in/?q=ICELL">GNITS Innovation Cell</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=NFSE">Sanskrit Education(NFSE)</a></li>
                  </ul>
                </li>
                <li><a href="contact2.php">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <!--<section>
      <h2>Gallery</h2>
    </section>-->
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN GALLERY SECTION ================-->
    <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="gallery_area">
            </br>
          </br>
        </br></br></br></br>
                <a href="./img/gallery/DSC03848.jpg" title="This is Title">
                  <img class="gallery_img" src="img/gallery/DSC03848.jpg" alt="img" />
                <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC03853.jpg" title="This is Title2">
                  <img class="gallery_img" src="img/gallery/DSC03853.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC03867.jpg" title="This is Title3">
                  <img class="gallery_img" src="img/gallery/DSC03867.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC03879.jpg" title="This is Title4">
                  <img class="gallery_img" src="img/gallery/DSC03879.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC03903.jpg" title="This is Title5">
                  <img class="gallery_img" src="img/gallery/DSC03903.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC03974.jpg">
                  <img class="gallery_img" src="img/gallery/DSC03974.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC03978.jpg">
                  <img class="gallery_img" src="img/gallery/DSC03978.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC07031.jpg">
                  <img class="gallery_img" src="img/gallery/DSC07031.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                 <a href="./img/gallery/DSC08476.jpg" title="This is Title">
                  <img class="gallery_img" src="img/gallery/DSC08476.jpg" alt="img" />
                <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC07056.jpg" title="This is Title2">
                  <img class="gallery_img" src="img/gallery/DSC07056.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="././img/gallery/DSC07074.jpg" title="This is Title3">
                  <img class="gallery_img" src="img/gallery/DSC07074.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC07080.jpg" title="This is Title4">
                  <img class="gallery_img" src="img/gallery/DSC07080.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC07083.jpg" title="This is Title5">
                  <img class="gallery_img" src="img/gallery/DSC07083.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC07087.jpg">
                  <img class="gallery_img" src="img/gallery/DSC07087.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC07090.jpg">
                  <img class="gallery_img" src="img/gallery/DSC07090.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="./img/gallery/DSC08310.jpg">
                  <img class="gallery_img" src="img/gallery/DSC08310.jpg" alt="img" />
                  <span class="view_btn">View</span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->

    <!--=========== BEGIN FOOTER SECTION ================-->
    <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Meaning of Tagline</h3>
                <p>"Shraddhavan labhate jnanam" (one who has "Shraddha" obtains Knowledge/Jnana).A faithful man who is absorbed in transcendental knowledge and who subdues his senses quickly attains the supreme spiritual peace.</p>
              </div>
            </div>
            <div class="col-ld-2  col-md-2 col-sm-2">
              <div class="single_footer_widget">
                <h3>College</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Our Faculty</a></li>
                  <li><a href="#">Our Students</a></li>
                  <li><a href="#">Campus Tour</a></li>
                  <li><a href="#">Management</a></li>
                  <li><a href="#">News &amp; Media</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Other Links</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">JNTUH</a></li>
                  <li><a href="#">NPTEL</a></li>
                  <li><a href="#">Hebeon</a></li>
                </ul>
              </div>
            </div>
             <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/pages/GNITS/108118522554749" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="https://twitter.com/GnitsEcell" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="https://plus.google.com/117115220839938166189" target="_blank"><i class="fa fa-google-plus" target="_blank"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="https://in.linkedin.com/school/g.-narayanamma-institute-of-technology-and-science/"><i class="fa fa-linkedin" target="_blank"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="https://www.youtube.com/watch?v=4OD-mbCie1c" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--  <div class="col-ld-6  col-md-6 col-sm-6"> 
           <div class="embed-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/2RUHtHU2ySg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>-->
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by <a href="#" rel="nofollow">Swetha & Nikitha CSE-C 2/4</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <?php
}else{
header('location:login.html');
}
?>
               
    <!--=========== END FOOTER SECTION ================-->



    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
  </body>
</html>
