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

require_once './config.php';

if (isset($_GET["id"])) {
  //$id = intval(base64_decode($_GET["id"]));
  $reg = $_GET['id'];
  $sql = "SELECT * FROM student_validation where Stu_reg_no = :reg";
  try {
    $stmt = $DB->prepare($sql);
    $stmt->bindValue(":reg", $reg);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (count($result) > 0) {

      if ($result[0]["status"] == "Approve") {
        $msg = "Your account has already been activated.";
        $msgType = "danger";
      } else {
        $sql = "UPDATE student_validation SET  status =  'Approve' WHERE Stu_reg_no = :reg";
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":reg", $reg);
        $stmt->execute();
        $msg = "Your account has been activated.";
        $msgType = "success";
      }
    } else {
      $msg = "No account found";
      $msgType = "warning";
    }
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
}

include './pageheader.php';
?>
<?php if ($msg <> "") { ?>
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <button data-dismiss="alert" class="close" type="button">x</button>
    <p><?php echo $msg; ?></p>
  </div>
<?php } ?>
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <h4>Successiful User Account Activation You can now Set Your Account Password.</h4><br> 

<div class="alert alert-success"> <a href="login.php" class="alert-link">Success! Click Here to Set Your Password.</a></div>

<div class="alert alert-success"><a href="" data-toggle="modal" data-target="#myModal"> Sign Up</a></div>
    
    </div>
  </div>
</div>

<?php include 'signup_verify.php' ?>

        <script src="js/jquery.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
        <script src="assets/js/docs.min.js"></script>
</body>
</html>
