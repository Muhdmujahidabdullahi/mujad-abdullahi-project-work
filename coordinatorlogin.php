



<!DOCTYPE html>
<html lang="en">
<head>
<title>FUD Siwes System</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/docs.min.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
    <link href="adorn/signin.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <form class="form-signin" role="form" action="cloginexec.php" method="POST">
        <h2 class="form-signin-heading">Log-In</h2>
                      
        <input type="text" id="uname"  class="form-control" placeholder="Username" required autofocus name="username">
        <input type="password" id="upass" class="form-control" placeholder="Password" required name="password">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>


<script type="text/javascript">
  function validateForm() {

    var username = $.trim($("#uname").val());
    var password = $.trim($("#upass").val());
    
    if (username == "") {
      alert("Enter your name.");
      $("#uname").focus();
      return false;
    } 
    
    if (password == "") {
      alert("Enter password");
      $("#upass").focus();
      return false;
    } 

    return true;
  }

</script>

  </body>
</html>

