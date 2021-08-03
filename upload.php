<!DOCTYPE html> 
<html> 
<head> 
<title>FUD Siwes System</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/docs.min.css" rel="stylesheet">
     <link href="adorn/app.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <link rel="stylesheet" type="text/css" href="adorn/scroll.css">
    <link href="adorn/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="adorn/user.css">
    <link rel="stylesheet" href="adorn/dashboard.css">
    <link rel="stylesheet" type="text/css" href="adorn/scroll.css">
    <link rel="stylesheet" type="text/css" href="adorn/demo.css"/>
<style type="text/css">
#content{ 
    width: 50%; 
    margin: 20px auto; 
    border: 1px solid #cbcbcb; 
} 
form{ 
    width: 50%; 
    margin: 20px auto; 
} 
form div{ 
    margin-top: 5px; 
} 
 
 @media screen and (max-width: 580){
 	#content{ 
    width: auto; 
    margin: 20px auto; 
    border: 1px solid #cbcbcb; 
	}	
 }
</style>
</head>
<body style="background-color:transparent; background-image:url('img/bg.jpg')">

<div class = "codrops-top">
                <a href="coordinatorhome.php">
                    <strong>&laquo; Previous page: </strong> Dashboard
                </a>
                
                <div class = "clr"></div>
            </div>

<div id="content">

             <h1>Upload Application Letter </h1>
  
  <form method="POST" action="uploadexec.php" enctype="multipart/form-data">

      
      <div class="form-group">
      <label class="control-label">Browse Application Letter.</label>
      <input type="file" name="file" value="" class="input-group"/> 
</div>        

<div> 
    <button type="submit" name="btn_upload" class="btn btn-primary btn-block btn-lg">UPLOAD</button> 
</div> 
  
</form> <br>

</div> 
</body> 
</html> 