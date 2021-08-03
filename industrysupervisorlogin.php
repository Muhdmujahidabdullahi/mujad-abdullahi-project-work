<?php
session_start();
error_reporting(0);
?>


<html>
<head>
<title>FUD Siwes System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/docs.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <link rel="stylesheet" href="adorn/logincss.css">
    <style type="text/css">
      #div{
        width: 100px;
        text-align: center;
        
      }
    </style>
</head>
<body style="background-color:transparent; background-image:url('img/bg.jpg')" >
    <h2 style="font-family: castellar; text-align: center;">LOGIN</h2>
    
                     <?php
                     if ($_SESSION['ad_err']<> "") {
                     ?>
                     <div class="alert alert-dismissable alert-<?php echo"danger"; ?>" >
                     <button data-dismiss="alert" class="close" type="button">x</button>
                     <?php

                        if(isset( $_SESSION['ad_err']) && strlen( $_SESSION['ad_err']) > 0){
                         echo $_SESSION['ad_err'];
                          $_SESSION['ad_err'] = "";
                          }
                      ?></div><?php
                    }
                     ?>


    <div class="login-card"> 

        
         <?php
                     if ($_SESSION['ad_err']<> "") {
                     ?>
                     <div class="alert alert-dismissable alert-<?php echo"danger"; ?>" >
                     <button data-dismiss="alert" class="close" type="button">x</button>
                     <?php

                        if(isset( $_SESSION['ad_err']) && strlen( $_SESSION['ad_err']) > 0){
                         echo $_SESSION['ad_err'];
                          $_SESSION['ad_err'] = "";
                          }
                      ?></div><?php
                    }
                     ?>


        <img src="img/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form class="form-signin" action="industrysupervisorloginexec.php" method="POST"><span class="reauth-email"> </span>
            <input class="form-control" type="text" required name="staffID" placeholder="Staff ID" autofocus="" >
            <input class="form-control" type="password" required name="staffpass" placeholder="Password" id="inputPassword">

            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="sign">Sign in</button>
        </form>
        <a href="#" class="forgot-password" style="text-align: left;">Forgot/Resset password?</a>
    </div>  
    <script src="js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
</body>

</html>
