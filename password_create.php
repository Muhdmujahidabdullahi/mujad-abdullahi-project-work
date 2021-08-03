<?php
session_start();
error_reporting(0);
?>


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
      
    </style>
</head>
<body>




<?php
include './pageheader.php';
?>


<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <h4>Your Account Was Successiful Set .</h4><br> 

                    <?php
                     if ($_SESSION['ad_err']<> "") {
                     ?>
                     <div class="alert alert-dismissable alert-<?php echo"sucess"; ?>" >
                     <button data-dismiss="alert" class="close" type="button">x</button>
                     <?php

                        if(isset( $_SESSION['ad_err']) && strlen( $_SESSION['ad_err']) > 0){
                         echo $_SESSION['ad_err'];
                          $_SESSION['ad_err'] = "";
                          }
                      ?></div>

                      

                      <?php


                    }
                     ?>
    
    </div>
  </div>
</div>


        <script src="js/jquery.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
        <script src="assets/js/docs.min.js"></script>
</body>
</html>
