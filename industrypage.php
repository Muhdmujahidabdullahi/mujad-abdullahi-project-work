<?php 

session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>FUD Siwes System</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="adorn/dashboard.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <style type="text/css">
      
     .a{ width: 1944px; border: 1px solid black;  }
     .b{ width:300px; height:200px; }

     @media screen and (max-width: 580px){

      .a{width: 52%; border: 1px solid black; border-width: }
      .b{ width:223px; height:200px; }
     }

    </style>

  </head>

  <body style="background-color:transparent; background-image:url('img/bg.jpg')">
   
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FUD E-Siwes</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            
            <li><a href="#">Help</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="">
        
        
      </div>
    </div>

  
  <table width="100%" border="0">
  <tr>
    <td colspan="2" >
      <marquee> <h1>Welcome <?php echo $_SESSION['FNAME']. "  ". "Account" . $_SESSION['STAFF_ID'] ; ?></h1></marquee>
    </td>
  </tr>
  <tr valign="top">
    <td width="20">
        
         <div class="col-sm-3 col-md-2 " style="width: 334px;">
          <ul class="nav nav-pills nav-stacked" >
            <li><img src="img/slide3.jpg" class="b"></li>
            <li class="active"><a href="#"><span class="badge pull-right">42</span>Main Menu</a></li>
            <li class="active"><a href="industry_student.php">Student Info</a></li>
            <li class="active"><a href="stu_list.php">Logbook Overview/Comment</a></li>

            <li class="active"><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
       
    </td>
    <td width="50" >
        <center><h1>Federal University Dutse (FUD) E-Siwes, Supervisor Panel </h1></center>
    </td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#b5dcb3">
      <center>
      Copyright © 2021 Mujahid Abdullahi
      </center>
    </td>
  </tr>
</table>  
    
<!--
    <div class="a" >
      
      <div class="col-sm-3 col-md-2 ">
          <ul class="nav nav-pills nav-stacked" >
            <li><img src="img/slide3.jpg" class="b"></li>
            <li class="active"><a href="#"><span class="badge pull-right">42</span>Main Menu</a></li>
            <li class="active"><a href="student_data.php">Student Info</a></li>
            <li class="active"><a href="supervisor_view_logbook.php">Logbook Overview</a></li>
            <li class="active"><a href="#"><span class="badge pull-right"><img src="img/icon-email.png" ></span>Send Message</a></li>
            <li class="active"><a href="#">Grade/Comment</a></li>
            
            <li class="active"><a href="#">Notification</a></li>
          </ul>
          
        </div>

    </div>
  -->

    <br><br><br>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
</html>
