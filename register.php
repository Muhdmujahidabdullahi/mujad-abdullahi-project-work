<?php include('process.php'); ?>
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
    <link rel="stylesheet" href="adorn/style.css">
</head>
<body>
 <form id="register_form">
      <h1>Register</h1>
      <div id="error_msg"></div>
	  <div>
	 	<input type="text" name="username" placeholder="Username" id="username" >
	    <span></span>
	  </div>
	  <div>
	    <input type="email" name="email" placeholder="Email" id="email">
		<span></span>
	  </div>
	  <div>
	   <input type="password" name="password" placeholder="Password" id="password">
	  </div>
	  <div>
	 	<button type="button" name="register" id="reg_btn">Register</button>
	  </div>
	</form>
</body>
</html>
<!-- scripts -->
	<script src="js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
	<script src="script.js"></script>
