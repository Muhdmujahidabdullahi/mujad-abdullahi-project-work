<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        require_once('connection.php');
        
        $reg = $_POST['stureg'];
        $pwd = $_POST['stupass'];
        
        $db = mysqli_select_db($con,$Dbase);
        if ($db) {
         $SQL = mysqli_query($con,"SELECT * FROM login_account_details WHERE Stu_reg_no = '$reg' AND Password = '$pwd'");
        if (mysqli_num_rows($SQL) != 0) {
            $db_field = mysqli_fetch_assoc($SQL);
            //if (password_verify($ppwd, $db_field['Password'])) {
                session_start();
                $_SESSION['ggc'] ="1";
                $_SESSION['STU_ID'] = $db_field['Stu_reg_no'];
                //$_SESSION['FNAME']   = $db_field['name'];
                //$_SESSION['EMAIL']   = $row['email'];
                //$_SESSION['DESG']    = $row['Designation'];
                //$fullnames = trim(strtoupper($row['name']));
                //$_SESSION['USER_FULL_NAMES'] = $fullnames;

                header('LOCATION: studashboard.php');
            }
            else {
                $_SESSION['ad_err'] =  'Invalid Username and Password Combination';
                header('LOCATION: login.php');
            } 
        }
       else{
             $_SESSION['ad_err'] =  'DB not found';
             header('LOCATION: login.php');
        }
}
?>