<?php 
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
    <link rel="stylesheet" type="text/css" href="adorn/style2.css"/>
    <link rel="stylesheet" type="text/css" href="adorn/animate-custom.css"/>

    <style type="text/css">
      h1{
  color: #7cbcd6;
  text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
  font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
  font-size: 30px;
  line-height: 5px;
  font-weight: 400;
  color: rgba(26,89,120,0.9);
  text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
    padding: 0px 0px 5px 0px;
    
}

    </style>
</head>
<body>

<?php
            $name; 
          	$dbh = mysqli_connect("localhost","root",""); 
          	$db = mysqli_select_db($dbh, "fudsiwes");
          	$sql = mysqli_query($dbh, "SELECT * FROM siwes_letter");
          	$sql2 = mysqli_query($dbh, "SELECT * FROM notice");
          	$row = mysqli_num_rows($sql2);
          	while ($res = mysqli_fetch_assoc($sql)) {
		     $name = $res['file_name'];
			}

?>
<?php include 'header.php'; ?>

<div class="container-fluid">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>          
          <h1 class="page-header">welcome to FUD E-Siwes<span><ma> Student Dashbord</span> &nbsp;<?php echo $_SESSION['STU_ID']; ?></h1><br><br>
 </header>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="Applicationletter/<?php echo $name; ?>" download="Application Letter"><img src="img/downloadicon4.jpg" class="img-responsive" alt="Download" height="230px">
              <h4>Download</h4></a>
              <span class="text-muted">Application Letter</span>
            </div>

            <div class="col-xs-6 col-sm-3 placeholder"><a href="logbook.php">
              <img src="img/logbookicon4.jpg" class="img-responsive" alt="Logbook">
              <h4>Logbook</h4></a>
              <span class="text-muted">Record Daily Activities</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="managelogbook.php"><img src="img/logbookicon.jpg" class="img-responsive" >
              <h4>Manage Logbook</h4></a>
              <span class="text-muted">Edit/Delete a Record in Logbook</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder"><a href="viewnotice.php">
              <img src="img/notificationicon.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Feedback</h4></a>
              <span class="text-muted"><?php echo $row; ?></span>
            </div>
			</div>
</div>
</div>
</body>
</html>