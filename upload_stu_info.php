<?php 
error_reporting(0);
session_start();
 ?>

<?php  
if (isset($_POST['submit'])) {
	
 $connect = mysqli_connect("localhost", "root", "", "fudsiwes");  
 $number = count($_POST["name"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO student_validation(Stu_reg_no, email,supervisor_name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Was Sucessfully Inserted";  
 }  
 else  
 {  
      echo "Please Enter Names";  
 }

}
 ?> 



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
        <link rel="stylesheet" type="text/css" href="adorn/demo.css"/>
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">  
        <script src="bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>  
      </head>  
      <body style="background-color:transparent; background-image:url('img/bg.jpg')">  


  

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FUD E-Siwes</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="coordinatorhome.php">Dashboard</a></li>
            
            <li><a href="uploaded_record.php">Uploaded Data</a></li>
            
            <li><a href="#">Help</a></li>
          </ul>
         
        </div>
      </div>
    </div>


           <div class="container">  
           	    <br />  
                <br />  
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
                <h2 align="center">Student Upload Data Page</h2>  
                <div class="form-group">  
                     <form name="add_name" id="add_name" action="stu_info_exec.php" method="POST">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="regno[]" placeholder="Student Reg. No" class="form-control name_list" /></td>
                                         <td><input type="email" name="email[]" placeholder="Student Email" class="form-control name_list" /></td>
                                         <td><input type="text" name="supervisor[]" placeholder="Supervisor Name" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>
                               <button type="submit" class="btn btn-primary" name="submit">Save</button>  
                               <!--<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  -->
                          </div>  
                     </form>  
                </div>  
           </div>  

        	<script src="js/jquery.min.js"></script>
    		<script src="dist/js/bootstrap.min.js"></script>
    		<script src="assets/js/docs.min.js"></script>

      </body>  
 </html>  
 <script>  
 
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="regno[]" placeholder="Student Reg. No" class="form-control name_list" /></td><td><input type="email" name="email[]" placeholder="Student Email Address" class="form-control name_list" /></td><td><input type="text" name="supervisor[]" placeholder="Supervisor Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
        
 });  
 </script>
   


