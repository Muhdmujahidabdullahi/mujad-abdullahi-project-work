<?php 
error_reporting(0);
session_start();
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
    <link rel="stylesheet" href="adorn/user.css">
    <link rel="stylesheet" href="adorn/dashboard.css">
    <link rel="stylesheet" type="text/css" href="adorn/demo.css"/>
    
</head>

<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    background-color: #26262b9e;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #673AB7;
	}
	.display-chat{
		height:300px;
		background-color:#d69de0;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  body{background-color:transparent; background-image:url('img/bg.jpg') }
  </style>
<body>
    <div class = "codrops-top">
                <a href="coordinatorhome.php">
                    <strong>&laquo; Previous page: </strong> Dashboard
                </a>
                
                <div class = "clr"></div>
  </div><!--/ Codrops top bar -->
<div class="container">
 
  <center><h1>Welcome <span style="color:#dd7ff3;"><?php //echo $_SESSION['name']; ?> !</span></h1>
	<label>Send Notice Information</label>

    <?php
                     if ($_SESSION['ad_err']<> "") {
                     ?>
                     <div class="alert alert-dismissable alert-<?php echo"success"; ?>" >
                     <button data-dismiss="alert" class="close" type="button">x</button>
                     <?php

                        if(isset( $_SESSION['ad_err']) && strlen( $_SESSION['ad_err']) > 0){
                         echo $_SESSION['ad_err'];
                          $_SESSION['ad_err'] = "";
                          }
                      ?></div><?php
                    }
    ?>

  </center></br>
  <form class="form-horizontal" method="post" action="co_sendexec.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="Type your message here..." rows="12"></textarea>
      </div>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary">Send</button>
      </div>

    </div>
  </form>
</div>
	
	<script src="js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>

</body>
</html>
