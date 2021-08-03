<?php
			session_start();
			require_once('connection.php');
            if(isset($_POST['sumit'])){
            
            $reg = $_SESSION['STU_ID'];
            $file =   $_FILES['file']['name'];
            $weekno = $_POST['weekno'];
            $dayno = $_POST['dayno'];
            $dayname = $_POST['dayname'];
            $cdate = $_POST['cdate'];
            $desc = $_POST['desc'];
            echo $file;
            if($file ==''){
            	$query = "INSERT INTO logbook (stu_regno, week_no,day_no,day_name,date,Description) VALUES ('$reg','$weekno','$dayno','$dayname','$cdate','$desc')";
            	$run = $dbfound->query($query);
            
            	if($run)
				{
				$_SESSION['ad_err'] =  'Record Was Sucessfully Saved';
				header('Location: logbook.php');
				}
				else {
                $_SESSION['ad_err'] =  'Try Again!!! Something Went Wrong';
                header('LOCATION: logbook.php');
                }

            }
            else
            {
            	$file = rand(1000,100000)."-".$_FILES['file']['name'];
 				$file_loc = $_FILES['file']['tmp_name'];
 				$file_size = $_FILES['file']['size'];
 				$file_type = $_FILES['file']['type'];
 				$folder="Logbookchart/";
                $new_size = $file_size/1024;  
 				
 				$new_file_name = strtolower($file);
 				
                $final_file=str_replace(' ','-',$new_file_name);
 
 				if(move_uploaded_file($file_loc,$folder.$final_file))
 				{
                 
 				$query = "INSERT INTO logbook (stu_regno, week_no,day_no,day_name,date,Description,file_name) VALUES ('$reg','$weekno','$dayno','$dayname','$cdate','$desc','$new_file_name')";
            	$run = $dbfound->query($query);
            
            	if($run)
				{
				$_SESSION['ad_err'] =  'Record Was Sucessfully Saved';
				header('Location: logbook.php');
				}
				else {
                $_SESSION['ad_err'] =  'Try Again!!! Something Went Wrong';
                header('LOCATION: logbook.php');
                }

 				}
            }
            

       }
  
?>


 