<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        require_once('connection.php');
        
        $uname = $_POST['username'];
        $pwd = $_POST['password'];
        
        
        $db = mysqli_select_db($con,$Dbase);
        if ($db) {
            
         $SQL = mysqli_query($con,"SELECT * FROM cordinator_acct WHERE staff_ID = '$uname' AND password = '$pwd'");
            
        if (mysqli_num_rows($SQL) != 0) {

            $db_field = mysqli_fetch_assoc($SQL);
                session_start();
                $_SESSION['ggc'] ="1";
                header('LOCATION: coordinatorhome.php');
        }    
        
        else{
                $_SESSION['ad_err'] =  'User Account Not Found';
                header('LOCATION: coordinatorlogin.php');
        }

        }
        else{
                $_SESSION['ad_err'] =  'DB not found';
                header('LOCATION: coordinatorlogin.php');
        }

}
?>