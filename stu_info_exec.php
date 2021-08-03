<?php
  session_start();
  if(isset($_POST["submit"])) {
    $conn = mysqli_connect("localhost","root","", "fudsiwes");
    $itemCount = count($_POST["regno"]);
    $itemValues=0;
    $query = "INSERT INTO student_validation (Stu_reg_no, email, supervisor_name) VALUES ";
    $queryValue = "";
    for($i=0;$i<$itemCount;$i++) {
      if(!empty($_POST["regno"][$i]) || !empty($_POST["email"][$i]) || !empty($_POST["supervisor"][$i])) {
        $itemValues++;
        if($queryValue!="") {
          $queryValue .= ",";
        }
        $queryValue .= "('" . $_POST["regno"][$i] . "', '" . $_POST["email"][$i] . "','" . $_POST["supervisor"][$i] . "')";
      }
    }
    $sql = $query.$queryValue;
    if($itemValues!=0) {
        $result = mysqli_query($conn, $sql);
      if(!empty($result)) {
       $_SESSION['ad_err'] =  'Data was sucessfully Uploaded';
       header('Location: upload_stu_info.php');
      }
      else{
       $_SESSION['ad_err'] =  'Try Again Something Went Wrong !!!';
       header('Location: upload_stu_info.php'); 
      }
    }
  }
?>
