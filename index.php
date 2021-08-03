<!DOCTYPE html>
<html>

<head>
    <title>FUD Siwes System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/docs.min.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <link rel="stylesheet" type="text/css" href="adorn/scroll.css">
    <link href="adorn/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="adorn/user.css">
    <link rel="stylesheet" href="adorn/logincss.css">
    <style type="text/css">
        .responsive {
            width: 30%;
            max-width: 720px;
            height: 300px;
        }

         .top-left{
        position: absolute;
        top: 0px;
        font-size: 24px;
        left: 0px;
        color: white;
        font-weight: bold;
        background: rgb(0, 0, 0);/* Fallback color */
        background: rgba(0, 0, 0, 0.2);/* Black background with opacity */
        color: #ffffff;
        width: 100%;
        height: 550px;
        padding-top: 430px;
        padding-left: 120px;
      }
       #fa{
      animation: fadeInAnimation ease 6s;
      animation-iteration-count: 1;
      animation-fill-mode: forwards;
     }
     @keyframes fadeInAnimation{
       0%{opacity: 0;}
       100%{opacity: 1;}
     }
    @media screen and (max-width: 580px){
            .responsive {
            width: 100%;
            max-width: 700px;
            height: 400px;
            }
            .top-left{
             top: 0px;
            font-size: 16px;
            font-weight: bold;
            padding-top: 430px;
            padding-left: 20px;
            }
            #h1{font-size: 14px;}
    }
    </style>
</head>

<body style="background-color:transparent; background-image:url('img/bg.jpg')">
<?php include 'pageheader.php' ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/slide3.jpg" alt="FUD main gate">
            <div class="top-left" id="fa">Federal University Dutse, Main Gate</div>
          </div>
          <div class="item">
            <img src="img/slide1.jpg" alt="FUD Senate building">
            <div class="top-left" id="fa">Federal University Dutse, Library Complex</div>
          </div>
          <div class="item">
            <img src="img/slide2.jpg" alt="FUD Campus">
            <div class="top-left" id="fa">Federal University Dutse, Senate Block</div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>

    
    <div class="container">
        <h1 ><span class="label label-default" id="h1"> Welcome To FUD E-SIWES Management System</span></h1><hr style="background-color: black;">
        <div class="row">
                    <div class="jumbotron" >
        <h1 style="font-size: 18px; padding-left: 20px;font-variant: small-caps; font-family: Verdana, Arial, Helvetica, Sans-Serif;" ><span class="text-justify text-primary bg-primary">SIWES's Motivational Message From VC</span></h1>
        <p style="color: black;text-align: justify;"><img class="responsive" style="float: left;margin: 4px;" src="img/vc.jpg" >Students’ Industrial Work Experience Scheme (SIWES) is a programme designed to expose and prepare students of Universities, Polytechnics, Colleges of Technology, Colleges of Agriculture and Education for Industrial Work situation which they are likely to meet after graduation. It is a skills training programme which affords students the opportunity of familiarizing, acquiring and exposing themselves with the needed experience in handling industrial equipment and machinery that are not usually available in their institutions.</p>       
                    </div>
        </div>
                <hr>

                <div class="row">
                    <div class="jumbotron" >
        <h1 style="font-size: 18px; padding-left: 20px;font-variant: small-caps; font-family: Verdana, Arial, Helvetica, Sans-Serif;" ><span class="text-justify text-primary bg-primary">SIWES's Motivational Message From VC</span></h1>
        <p style="color: black;text-align: justify;"><img class="responsive" style="float: right;margin: 4px;" src="img/logo.jpg" >Students’ Industrial Work Experience Scheme (SIWES) is a programme designed to expose and prep`are students of Universities, Polytechnics, Colleges of Technology, Colleges of Agriculture and Education for Industrial Work situation which they are likely to meet after graduation. It is a skills training programme which affords students the opportunity of familiarizing, acquiring and exposing themselves with the needed experience in handling industrial equipment and machinery that are not usually available in their institutions.</p>       
                    </div>
        </div>

    </div>    
    
    <?php include 'footer.php' ?>

    <p class="company-name"> Copyright &copy; <a href="#">Federal University Dutse</a>. All Rights Reserved</p>
    <?php include 'signup_verify.php' ?>
</body>

</html>