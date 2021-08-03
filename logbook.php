<?php 
error_reporting(0);
session_start();
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
                    
                    <div id="wrapper">
                        <div id = "login" class = "animate form">
                            <form  action = "logbookexec.php" autocomplete = "on" method = "post" enctype="multipart/form-data"> 
                                <h1>LOGBOOK</h1> 
         
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
                       <!--         <p> 
                                 <label for = "last_name" class = "uname" >Scanned Picture</label> 
								 <input id = "last_name" name = "file" type = "file" placeholder = "Scanned Image"/>
								 </p>
								
								<p> 
                                 <label for = "last_name" class = "uname" >Week No</label> 
								 <input id = "last_name" name = "weekno" required = "required" type = "number" />
								</p>
								
								<p>
								<label for = "caddress" class = "uname">Day No</label>
								<select name="dayno" reqiured > 
									<option value="">--select--</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								</select> 
								&nbsp; &nbsp;
								</p>-->

								<p>
								<label for = "caddress" class = "uname">Day Name</label>
								<select name="dayname" reqiured > 
									<option value="">--select--</option>
									<option value="Monday">Monday</option>
									<option value="Tuesday">Tuesday</option>
									<option value="Wenesday">Wenesday</option>
									<option value="Thursday">Thursday</option>
									<option value="Friday">Friday</option>
									<option value="Satuday">Satuday</option>
									
								</select> 
								&nbsp; &nbsp;
								</p>


								<p>
								<label for = "birth_date" class = "dbirth" >Date</label>
                                 <input id = "birth_date" name = "cdate" required = "required" type = "date" placeholder = "MM/DD/YYY"/>
								</p>

								<p>
								<label for = "caddress" class = "uname">Exprience Description</label>
                                <textarea id = "caddress" name = "desc" required = "required" placeholder = "Learn Exprience Description" rows="7"></textarea><br/>
								</p>
								
                                <p class="signin button"> 
									<input type = "submit" value = "Save" name="sumit" data-icon="b"/> 
								</p>
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
