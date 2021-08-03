<?php 
error_reporting(0);
session_start();
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang = "en" class = "no-js">
    <head>
    <title>FUD Siwes System</title>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/docs.min.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <link rel="stylesheet" type="text/css" href="adorn/scroll.css">

        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="adorn/demo.css"/>
        <link rel="stylesheet" type="text/css" href="adorn/style2.css"/>
		<link rel="stylesheet" type="text/css" href="adorn/animate-custom.css"/>
		<script type="text/javascript" src="adorn/my_script.js"></script>
    </head>
    <body style="background-color:transparent; background-image:url('img/bg.jpg')">
        <div class = "container">
            <!-- Codrops top bar -->
            <div class = "codrops-top">
                <a href="studashboard.php">
                    <strong>&laquo; Previous page: </strong> Dashboard
                </a>
                
                <div class = "clr"></div>
            </div><!--/ Codrops top bar -->
            <section>				
                <div id="container_demo" >
                    <a class = "hiddenanchor" id ="toregister"></a>
                    <br><br>
                    <div id="wrapper">
                        <div id = "login" class = "animate form">
                            <form  action = "logbookexec.php" autocomplete = "on" method = "post" enctype="multipart/form-data"> 
                                <h1>Notice Board</h1> 

                                <?php
                    $query = "SELECT * FROM notice ORDER BY id";
                    $run = $dbfound->query($query);

                    while($row = $run->fetch_array()){
                      echo 'Send By:  '. $row['name'].'  '. ' '. ' ' . $row['postdate'].'<br>' . '<hr>';
                      echo $row['message'];
                      echo "<br>";
                    }

                ?>
            
                          </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
     <script src="js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    </body>
</html>
