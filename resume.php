<?php session_start();
if($_SESSION['s_name']==true)
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>  GNITS : Login</title>

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
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
  tab-2{margin-left: 500px;}
  .tab-2 input{display:block;margin-bottom :10px;}
  tr{transition:all .25s ease-in-out}
  /*tr:hover{background-color:#EEE;cursor: pointer}*/
  .jumbotron {
    padding: 30px 15px;
    margin-bottom: 30px;
    color: inherit;
    background-color: #eee;
    .container .jumbotron{
    padding-right: 60px;
    padding-left: 60px;
    border-radius: 6px;
    padding: 48px 0;
    box-sizing: border-box;
  }
  html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
  }
  </script>

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
              <a class="navbar-brand" href="./index.html"><span> G. NARAYANAMMA INSTITUTE OF TECHNOLOGY AND SCIENCE</span></a>
              <!-- IMG BASED LOGO  -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li ><a href="index2.html">Home</a></li>
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
                <li class="active"><a href="logout.php">Logout</a></li>
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
    <section id="imgBanner">
      <h2>Resume Development</h2>
    </section>
  <div class="jumbotron">
  <div class="tab tab-2">
  <div class="row">
    <div class="container">
    <div class="col-md-4">
    <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="text" class="form-control" name="fname" id="fname" placeholder="Serial Number "style="background-color:white;color:#700000;"/>
    <input type="text" class="form-control" name="ename" id="ename"placeholder="Event Name"style="background-color:white;color:#700000;"/>
    <input type="date" class="form-control" name="date" id="date"placeholder="Date"style="background-color:white;color:#700000;"/>
    <input type="file" class="form-control" name="file1" id="file1" placeholder="Upload File" class="btn btn-warning" style="background-color:white;color:#700000;"/>
    <ul>
    <li class="btn btn-success" button onclick="addHtmlTableRow();">Add Event</button></li>
    <li class="btn btn-info" button onclick="editHtmlTbleSelectedRow();">Edit Event</button></li>
    <li class="btn btn-danger" button onclick="removeSelectedRow();">Delete Event</button></li>
    </ul>
    </form>
    </br></br></br>
  </div>
</div>
</div>
</div>
</div>
   <div class="container">
    <table id="table" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" width="100%">
    <thead>
      <tr>
      <th><font size =3>S.No</font></th>
      <th><font size =3>Events</font></th>
      <th><font size =3>Date</font></th>
      <th><font size =3>Upload PDF</font></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>MUN</td>
        <td>11-03-2018</td>
        <td>yes</td>
      </tr>
      <tr>
        <td>2</td>
        <td>web</td>
        <td>12-03-2018</td>
        <td>yes</td>
      </tr>
      <tr>
        <td>3</td>
        <td>abcd</td>
        <td>13-03-2018</td>
        <td>yes</td>
      </tr>
    </tbody>
  </table>
</div>
<script>

var rIndex,
    table = document.getElementById("table");
function checkEmptyInput()
{
  var isEmpty=false,
      fname=document.getElementById("fname").value,
      ename=document.getElementById("ename").value,
      date=document.getElementById("date").value,
      file1=document.getElementById("file1").value;
      if(fname===""){
         alert("S.No cannot be empty");
         isEmpty=true;
       }
       if(ename===""){
         alert("Event cannot be empty");
         isEmpty=true;
       }
       if(date===""){
         alert("Date cannot be empty");
         isEmpty=true;
       }
       return isEmpty;
       if(file1===""){
         alert("Upload it!! because it is considered as proof for an event ");
         isEmpty=true;
       }
       return isEmpty;
}
function addHtmlTableRow()
{
  if(!checkEmptyInput()){
  var newRow=table.insertRow(table.length),
      cell1=newRow.insertCell(0),
      cell2=newRow.insertCell(1),
      cell3=newRow.insertCell(2),
      cell4=newRow.insertCell(3),
      fname=document.getElementById("fname").value,
      ename=document.getElementById("ename").value,
      date=document.getElementById("date").value,
      file1=document.getElementById("file1").value;
      cell1.innerHTML=fname;
      cell2.innerHTML=ename;
      cell3.innerHTML=date;
      cell4.innerHTML=file1;
      selectedRowToInput();
    }
}
function selectedRowToInput()
{

  for(var i=0;i<table.rows.length;i++)
  {
    table.rows[i].onclick=function()
    {
      rIndex=this.rowIndex;
      document.getElementById("fname").value=this.cells[0].innerHTML;
      document.getElementById("ename").value=this.cells[1].innerHTML;
      document.getElementById("date").value=this.cells[2].innerHTML;
      document.getElementById("file1").value=this.cells[3].innerHTML;
    };
  }
}

selectedRowToInput();

function editHtmlTbleSelectedRow()
{
  var fname=document.getElementById("fname").value,
      ename=document.getElementById("ename").value,
      date=document.getElementById("date").value;
      file1=document.getElementById("file1").value;
if(!checkEmptyInput()){
  table.rows[rIndex].cells[0].innerHTML=fname;
  table.rows[rIndex].cells[1].innerHTML=ename;
  table.rows[rIndex].cells[2].innerHTML=date;
  table.rows[rIndex].cells[3].innerHTML=file1;
}
}
function removeSelectedRow()
{
  table.deleteRow(rIndex);
  document.getElementById("fname").value="";
  document.getElementById("ename").value="";
  document.getElementById("date").value="";
  document.getElementById("file1").value="";
}
</script>
<?php
}else{
header('location:login.html');
}
?>

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
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <!--<script src="js/queryloader2.min.js" type="text/javascript"></script>-->
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
