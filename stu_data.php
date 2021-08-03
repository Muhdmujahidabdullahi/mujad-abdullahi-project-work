<?php
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
    <link rel="stylesheet" href="adorn/style3.css">
    <link rel="stylesheet" type="text/css" href="adorn/demo.css"/>
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

<div class = "codrops-top">
                <a href="studashboard.php"> <strong>&laquo; Previous page: </strong> Dashboard </a>       
                <div class = "clr"></div>
    </div>

	<div class="container">
		
    <div class="page-header">
        <h1>Student Personal Information</h1>
    </div>
    <div class="clearfix"></div>

  <div class="row">
    <div class="col-lg-6">
      <div class="well contact-form-container">
        <form class="form-horizontal contactform" action="uploadexec.php" enctype="multipart/form-data" method="post" name="f" onsubmit="return validateForm();">
          <fieldset>
            <?php
                     if ($_SESSION['ad_err']<> "") {
                     ?>
                     <div>
                     <button data-dismiss="alert" class="close" type="button">x</button>
                     <?php

                        if(isset( $_SESSION['ad_err']) && strlen( $_SESSION['ad_err']) > 0){
                         echo $_SESSION['ad_err'];
                          $_SESSION['ad_err'] = "";
                          }
                      ?></div><?php
                    }
          ?>
            <div class="form-group">
              <p> 
                 <label class="col-lg-12 control-label" >Student Photo</label> 
                 <input id = "last_name" name = "image" required  type = "file" placeholder = "Photo"/>
               </p>
             </div>
            <div class="form-group">
              <label class="col-lg-12 control-label" for="uname">Student Fullname:
                <input type="text" placeholder="Your Full Name" id="uname" name="uname" required>
              </label>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" >Phone Number:</label>
                <input class="form-control" type="phone" placeholder="Phone Number"  name="pno">
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" >Faculty:</label>
              <select name="fac" reqiured > 
                                    <option value="">--select--</option>
                                    <option value="Faculty of Computer & Info. Tech.">Faculty of Computer & Info. Tech.</option>                                    
                                </select>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" >Department:</label>
              <select name="dept" reqiured > 
                                    <option value="">--select--</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Software Engineering">Software Engineering</option>
                                </select>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Date of Birth:</label>
                <input class="form-control" type="date" placeholder="Phone No"   name="dob" required>
            </div>

            <div style="height: 10px;clear: both"></div>

            <div class="form-group">
              <div class="col-lg-10">
                <label class="col-lg-12 control-label">
                <button class="btn btn-primary" type="submit" name="sumit">Submit</button> 
                </label>
              </div>
              </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>



<script type="text/javascript">
  function validateForm() {

    var your_name = $.trim($("#uname").val());
    

    // validate name
    if (your_name == "") {
      alert("Enter your name.");
      $("#uname").focus();
      return false;
    } else if (your_name.length < 3) {
      alert("Name must be atleast 3 character.");
      $("#uname").focus();
      return false;
    }

    

    return true;
  }

  function isValidEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }


</script>


</div>


			<script src="js/jquery.min.js"></script>
    		<script src="dist/js/bootstrap.min.js"></script>
    		<script src="assets/js/docs.min.js"></script>

</body>
</html>
