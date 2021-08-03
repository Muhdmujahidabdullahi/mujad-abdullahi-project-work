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
    <link rel="stylesheet" href="adorn/user.css">
</head>
<body>



<?php

require_once 'config.php';

if (isset($_POST["sub"])) {
  require_once "phpmailer/class.phpmailer.php";

  $reg = $_POST['regno'];
  $pass = trim($_POST["pass1"]);
  $email = trim($_POST["uemail"]);

      include_once 'connection.php';
      $qry =$dbfound->query("SELECT * from student_validation WHERE Stu_reg_no = '$reg' AND email = '$email'");
      //$rows = $qry->rowCount();
      $rows = mysqli_num_rows($qry);
      if($rows != 0){


//                $lastID = $DB->lastInsertId();

        $message = '<html><head>
                <title>Email Verification</title>
                </head>
                <body>';
        $message .= '<h1>Hello ' . $reg . '!</h1>';
        $message .= '<p><a href="'.SITE_URL.'activate.php?id=' . $reg . '">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
        $message .= "</body></html>";
        

        // php mailer code starts
        $mail = new PHPMailer(true);
        $mail->IsSMTP(); // telling the class to use SMTP

        $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port = 465;                   // set the SMTP port for the GMAIL server

        $mail->Username = 'binubalegarko13@gmail.com';
        $mail->Password = '537902@gaK';

        $mail->SetFrom('binubalegarko13@gmail.com', 'Federal University Dutse');
        $mail->AddAddress($email);

        $mail->Subject = trim("Email Verifcation - wwww.fud.edu.ngg");
        $mail->MsgHTML($message);

        try {
          $mail->send();
          $msg = '<b>'. "Registration Successiful".'</b>'.'</br>'."A Confirmation message has been sent to your register email address, Please log-in to verify and sign-in to your account.";
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }
      } 
      else {
        $msg = "Failed to create User";
        $msgType = "warning";
      }


    
}
  

  //} //try closing
  //catch (Exception $ex) {
    //echo $ex->getMessage();
  //}


//}



          
    

    /*try {
    
    if ($result[0]["count"] > 0) {
      $msg = "Email already exist";
      $msgType = "warning";
    } 
    else {
      $sql = "INSERT INTO account_detail(Enroll_No, Password,Email) VALUES('$enrol','$pass','$email')";
      $stmt = $DB->prepare($sql);
      $stmt->bindValue(":enrol", $name);
      $stmt->bindValue(":pass", md5($pass));
      $stmt->bindValue(":email", $email);
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $lastID = $DB->lastInsertId();

        $message = '<html><head>
                <title>Email Verification</title>
                </head>
                <body>';
        $message .= '<h1>Hi ' . $enrol . '!</h1>';
        $message .= '<p><a href="'.SITE_URL.'activate.php?id=' . base64_encode($lastID) . '">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
        $message .= "</body></html>";
        

        // php mailer code starts
        $mail = new PHPMailer(true);
        $mail->IsSMTP(); // telling the class to use SMTP

        $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port = 465;                   // set the SMTP port for the GMAIL server

        $mail->Username = 'binubalegarko13@gmail.com';
        $mail->Password = '537902@gaK';

        $mail->SetFrom('binubalegarko13@gmail.com', 'Mewar University');
        $mail->AddAddress($email);

        $mail->Subject = trim("Email Verifcation - wwww.MewarUniversity.edu.in");
        $mail->MsgHTML($message);

        try {
          $mail->send();
          $msg = '<b>'. "Registration Successiful".'</b>'.'</br>'."A Confirmation message has been sent to your register email address, Please log-in to verify and sign-in to your account.";
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }
      } else {
        $msg = "Failed to create User";
        $msgType = "warning";
      }


    
     }
  

  } //try closing
  catch (Exception $ex) {
    echo $ex->getMessage();
  }


} //closing iff

else{

        $msg = "Failed to create User";
        $msgType = "warning";

 }
  
}*/

include 'pageheader.php';
?>
       <div class="page-header">
        <h1><?php echo "Student Account Activation"; ?></h1>
      </div>
      <div class="clearfix"></div>

<?php if ($msg <> "") { ?>
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
  <button data-dismiss="alert" class="close" type="button">x</button>
    <p><?php echo $msg; ?></p>
  </div>
<?php } ?>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="well contact-form-container">
        <form class="form-horizontal contactform" action="verify_user.php" method="post" name="f" onsubmit="return validateForm();">
          <fieldset>
            <div class="form-group">
              <label class="col-lg-12 control-label" for="uname">Registration Number:
                <input type="text" placeholder="Your Reg. Num" id="uname" class="form-control" name="regno">
              </label>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" for="uemail">Email:
                <input type="text" placeholder="Your Email" id="uemail" class="form-control" name="uemail">
              </label>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Password:
                <input type="password" placeholder="Password" id="pass1" class="form-control" name="pass1">
              </label>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Confirm Password:
                <input type="password" placeholder="Password" id="pass2" class="form-control" name="pass2">
              </label>
            </div>

            <div style="height: 10px;clear: both"></div>

            <div class="form-group">
              <div class="col-lg-10">
                <button class="btn btn-primary" type="submit" name="sub">Submit</button> 
              </div>
              <br><br><br>
              <p>Click <a href="login.php">Here</a> to <b>Login If You Have Account</p>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function validateForm() {

    var reg_no = $.trim($("#uname").val());
    var your_email = $.trim($("#uemail").val());
    var pass1 = $.trim($("#pass1").val());
    var pass2 = $.trim($("#pass2").val());


    // validate name
    if (reg_no == "") {
      alert("Enter your Reg. Number.");
      $("#uname").focus();
      return false;
    } else if (reg_no.length < 7) {
      alert("Reg. No. must be atleast 7 characters.");
      $("#uname").focus();
      return false;
    }

    // validate email
    if (!isValidEmail(your_email)) {
      alert("Enter valid email.");
      $("#uemail").focus();
      return false;
    }

    // validate subject
    if (pass1 == "") {
      alert("Enter password");
      $("#pass1").focus();
      return false;
    } else if (pass1.length < 6) {
      alert("Password must be atleast 6 character.");
      $("#pass1").focus();
      return false;
    }

    if (pass1 != pass2) {
      alert("Password does not matched.");
      $("#pass2").focus();
      return false;
    }

    return true;
  }

  function isValidEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }


</script>

<?php
include './footer.php';
?>

</body>
</html>