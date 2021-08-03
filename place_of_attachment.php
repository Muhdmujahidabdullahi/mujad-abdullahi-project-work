<?php
session_start();
include('connection.php'); 
//require_once 'managelogbookexec.php';
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
    <link rel="stylesheet" type="text/css" href="adorn/demo.css"/>
    
    
    <link rel="stylesheet" href="adorn/style3.css">
    <link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
	
    <style type="text/css">
    body{background-color:transparent; background-image:url('img/bg.jpg') }
    
    @media screen and (max-width: 540px){
    	table{width: 50%;font-size: 13px;}
        h1{font-size: 18px;}
    }
    </style>

<body>
	<div class="container">
		<div class = "codrops-top">
                <a href="studashboard.php"> <strong>&laquo; Previous page: </strong> Dashboard </a>       
                <div class = "clr"></div>
         </div>

    <div class="page-header">
        <h1>Place of Attachment Information</h1>
    </div>

    <div class="clearfix"></div>

  <div class="row">
    <div class="col-lg-6">
      <div class="well contact-form-container">
        <form class="form-horizontal contactform" action="uploadexec.php" enctype="multipart/form-data" method="post" name="f" >
          <fieldset>
            <?php
                     if ($_SESSION['ad_err']<> "") {
                     ?>
                     <div>
                     <button data-dismiss="alert" class="close" type="button">x</button>
                     <?php

                        if(isset( $_SESSION['ad_err']) && strlen( $_SESSION['ad_err']) > 0){
                         echo $_SESSION['ad_err'].'<br>';
                          $_SESSION['ad_err'] = "";
                          }
                      ?></div><?php
                    }
    ?>

      
            <div class="form-group">
                 <label class="col-lg-12 control-label" for="uname" >Upload Acceptance Latter</label> 
                 <input id = "last_name" name = "image" required  type = "file" placeholder = "Photo"/>
             </div>
            <div class="form-group">
              <label class="col-lg-12 control-label" for="uname">Name of Industry/Company:
                <input type="text" placeholder="Name of Industry/Attachment" name="aname" required autofocus="">
              </label>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" for="uname">Address of Industry/Company:
                <input type="text" placeholder="Name of Industry/Attachment"  name="aaddress" required autofocus="">
              </label>
            </div>

            <div style="height: 10px;clear: both"></div>

            <div class="form-group">
              <label class="col-lg-12 control-label" for="uname">
                <button class="btn btn-primary" type="submit" name="ppa">Submit</button> 
              </label>
              </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

</div>


			<script src="js/jquery.min.js"></script>
    		<script src="dist/js/bootstrap.min.js"></script>
    		<script src="assets/js/docs.min.js"></script>

</body>
</html>
