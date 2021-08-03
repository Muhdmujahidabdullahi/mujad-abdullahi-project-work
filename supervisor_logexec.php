<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        require_once('connection.php');
        
        $sid = $_POST['staffID'];
        $pwd = $_POST['staffpass'];
        
        $db = mysqli_select_db($con,$Dbase);
        if ($db) {
         $SQL = mysqli_query($con,"SELECT * FROM supervisor_account WHERE staff_ID = '$sid' AND password = '$pwd'");
        if (mysqli_num_rows($SQL) != 0) {
            $db_field = mysqli_fetch_assoc($SQL);
            //if (password_verify($ppwd, $db_field['Password'])) {
                session_start();
                $_SESSION['ggc'] ="1";
                $_SESSION['STAFF_ID'] = $db_field['staff_ID'];
                $_SESSION['FNAME']   = $db_field['fullname'];


                header('LOCATION: supervisorpage.php');
            }
            else {
                $_SESSION['ad_err'] =  'Invalid Username and Password Combination';
                header('LOCATION: supervisor_login.php');
            } 
        }
       else{
             $_SESSION['ad_err'] =  'DB not found';
             header('LOCATION: supervisor_login.php');
        }
}
?>