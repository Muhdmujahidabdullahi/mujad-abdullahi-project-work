<?php
session_start();
if(isset($_POST['btn_upload']))
{


 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="Applicationletter/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  require_once('connection.php');
  $dbfound->QUERY("UPDATE siwes_letter SET file_name = '$final_file',file_type = '$file_type',file_size='$file_size' ");
  //mysqli_query($con,$sql);
  //echo $final_file. ' '.$file_type ;
  ?>
  <script>
        alert('successfully uploaded');
        window.location.href='upload.php?success';
  </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='upload.php?fail';
        </script>
  <?php
 }
}

if (isset($_POST['sumit'])) {

 $reg = $_SESSION['STU_ID'];
 $name = $_POST['uname'];
 $pno = $_POST['pno'];
 $fac = $_POST['fac'];
 $dept = $_POST['dept'];
 $dob = $_POST['dob'];
 
 $file = rand(1000,100000)."-".$_FILES['image']['name'];
 $file_loc = $_FILES['image']['tmp_name'];
 $file_size = $_FILES['image']['size'];
 $file_type = $_FILES['image']['type'];
 $folder="Profile_Picture/";
 
 $new_size = $file_size/1024;  
 $new_file_name = strtolower($file);
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  require_once('connection.php');
  $qry=$dbfound->QUERY("UPDATE student_validation SET fullname = '$name', phone_no = '$pno', faculty = '$fac', dept = '$dept', dob = '$dob', file_name = '$final_file' WHERE Stu_reg_no = '$reg' AND status = 'Approve' ");
   if ($qry) {
   
    $_SESSION['ad_err'] = '<div class="alert alert-success">'.'Record Was Successfully Updated '.'</div>';
    header('LOCATION: stu_data.php');
  }
  else{
    $_SESSION['ad_err'] =  '<div class="alert alert-warning">'.'Something Went Wrong, Try Again!!!'.'</div>';;
    header('LOCATION: stu_data.php');
  }
 }
 else
 {
  $_SESSION['ad_err'] =  '<div class="alert alert-warning">'.'Something Went Wrong, Data Not Updated!!!'.'</div>';;
    header('LOCATION: stu_data.php');
   }
}


if (isset($_POST['ppa'])) {

 $reg = $_SESSION['STU_ID'];
 $name = $_POST['aname'];
 $address = $_POST['aaddress'];
 
 $file = rand(1000,100000)."-".$_FILES['image']['name'];
 $file_loc = $_FILES['image']['tmp_name'];
 
 $folder="acceptance_latter/";
 $new_size = $file_size/1024;  
 $new_file_name = strtolower($file);
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  require_once('connection.php');
  $qry= $dbfound->QUERY("INSERT INTO place_of_attachment (Stu_reg_no, place_name, address, file_name) VALUES('$reg','$name','$address','$final_file') ");
  if ($qry) {
    $_SESSION['ad_err'] = '<div class="alert alert-success">'.'Successfully Uploaded Place of Attachment Record'.'</div>';
    header('LOCATION: place_of_attachment.php');
  }
  else{
    $_SESSION['ad_err'] =  '<div class="alert alert-warning">'.'Something Went Wrong, Try Again!!!'.'</div>';;
    header('LOCATION: place_of_attachment.php');
  }
 }
 else
 {
  $_SESSION['ad_err'] =  'Data Not Load';
  header('LOCATION: place_of_attachment.php');
 }
}



if (isset($_GET['regnum'])) {
  $reg = $_GET['regnum'];
  //$reg = $_GET['catego'];

  $update = true;
    $con = mysql_connect("localhost","root","");
    $dbcon = mysql_select_db("hostel_db",$con);
    if($dbcon){
  $sql = "SELECT * FROM student_details WHERE Enroll_No='$reg'";
  $result =mysql_query($sql);
  while ($res=mysql_fetch_assoc($result)) {
        $name = $res['fullname'];;
        $enrool = $res['Enroll_No'];;
        $pno = $res['Phone'];
        $faculty = $res['Faculty'];
        $dpt = $res['Department'];
        $hostel = $res['Hostel_name'];
        $rno = $res['Room_no'];
        $emil = $res['Email'];
        
         //echo "<option>".$db_field['name']."</option>";

      }

}
}


?>