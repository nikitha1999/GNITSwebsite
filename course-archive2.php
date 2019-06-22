<?php session_start();
if($_SESSION['username']==true||$_SESSION['s_name']==true)
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>GNITS : Courses</title>

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
    <style>
    #imgBanner {
  background-image: url("img/Engineering-Course-Image.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
  display: inline;
  float: left;
  height: 300px;
  margin-top: 77px;
  padding: 118px 0;
  text-align: center;
  width: 100%;
}
h2 {
    color: red;
}
h3 {
    color: blue;
}
</style>
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
                <li class="active"><a href="course-archive2.php">Courses</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dashboard<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="f_dash.php">Faculty</a></li>
                    <li><a href="s_dash.php">Student</a></li>
                     <li><a href="p_dash.php">Parent</a></li>
                    </ul>
                </li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="gallery2.php">Gallery</a></li>
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
    </br></br>
    <section id="imgBanner">
     <!--<h2>Courses</h2>-->
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
      <div class="container">
       <!-- Our courses titile -->
       <div class="jumbotron">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">Our Departments</h2>
              <span></span>
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->
        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">
              <ul class="course_nav">
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC08307.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">Computer Science and Engineering</a></h3>
                     <p>Computer engineering is the branch that integrates electronic engineering with computer sciences.A distinct and fresh perspective worked out by CSE Department of GNITS makes different and exclusive to join the top ranking Institutions across India.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/u.png" alt="img">
                      <p>Dr.M.Seetha,HOD</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC07056.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">Electronics & Communication Engineering</a></h3>
                     <p>Electronics and Communication Engineering (ECE) is one of the largest and fastest growing fields of engineering. The present Global Technology revolution is changing the world and is offering challenging opportunities to specifically Engineers.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/z.png" alt="img">
                      <p>Dr. B.Venkateshulu, HOD</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC07078.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">Information Technology</a></h3>
                    <p>The role of an IT department within an organization is to design, maintain, and support an organization's information technology infrastructure, thus allowing the organization to leverage both information and technology in an efficient, productive and secure manner.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/x.png" alt="img">
                      <p>Dr.I.Ravi Prakash Reddy,HOD</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC08399.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">Electrical & Electronics Engineering</a></h3>
                    <p>Electrical & Electronics Engineering (EEE), deals with the engineering problems, opportunities and needs of electrical, electronics, computer, telecommunication systems and related industries.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/y.png" alt="img">
                      <p>Dr. N. Malla Reddy,HOD</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC08456.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#"> 
Electronics & Telematics Engineering</a></h3>
                    <p>The usage of such facilities growing at a rapid pace will also result in more number of Job opportunities for skilled engineers in that field. Realizing the potential in a new stream of engineering – Electronics and Telematics (ETM/ETE).</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/w.png" alt="img">
                      <p>Dr.K.Rama Linga Reddy,HOD</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
        <!-- End Our courses content -->
      </div>
      <div class="container">
        <div class="jumbotron">
          <h2>ADMISSIONS</h2>
          <p>Admissions for the year 2018 will be starting in May month.By then be ready with the particulars.</br></br></br><h3>For Procedure to apply these are the rules:</h3></br></br>B.Tech Programmes(Four Year Courses)

Of the sanctioned intake in a branch of engineering, 70% of the seats are called Category – A seats or Convener seats. The remaining 30% seats are called Category – B seats or Management Quota Seats.</br></br>

Admissions for Category – A seats are conducted by the Convener, EAMCET Admissions through web counseling based on the EAMCET rank of the candidates and the rules of reservation for admission into professional colleges in Andhra Pradesh.</br></br>

B- Category seats are filled by the Management of the college following the guidelines stipulated by APSCHE, Hyderabad.</br></br>

Candidates who have passed two year Intermediate Examination conducted by Board of Intermediate Education or its equivalent with not less than 45% of marks in the prescribed group subjects i.e. Mathematics, Physics and Chemistry (40% in case of SC/ST candidates) are eligible for admission. However, the order of priority for selection of candidates for admission is the rank in JEE (Mains)- 2014, rank in EAMCET-2014, marks in the prescribed group subjects in the qualifying examination.</br>
<a href="https://drive.google.com/file/d/0B7ujow-fNhN7dkk0czRlLUEteG95VmI0UDgzYkE3SGlvSlFv/view?usp=sharing" target="_blank"><span>TS EAMCET - 2017 Cut-off Ranks</span></p>
        </div>
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->

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
      <?php
}else{
header('location:login.html');
}
?>
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

    <!--=========== END FOOTER SECTION ================-->



    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
  <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

  </body>
</html>
