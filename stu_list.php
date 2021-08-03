<?php
include('connection.php');
session_start(); 
//require_once 'managelogbookexec.php';
error_reporting(0);
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="adorn/style2.css"/>
    
  <link rel="stylesheet" type="text/css" href="adorn/animate-custom.css"/>
    
<body style="background-color:transparent; background-image:url('img/bg.jpg')">
  <div class="container">
    <div class = "codrops-top">
                <a href="industrypage.php"> <strong>&laquo; Previous page: </strong> Dashboard </a>       
                <div class = "clr"></div>
    </div>

  <?php 

         $sna = $_SESSION['FNAME'];
         //echo $sna;
          $page = $_GET['page'];

          if($page == "" || $page == "1"){
            $page1 = 0;
            $page = 1;
          }
          else{
          $page1 = ($page * 20) - 20;
          }

            $query = "SELECT * FROM student_validation, place_of_attachment WHERE (student_validation.Stu_reg_no) = (place_of_attachment.Stu_reg_no) LIMIT $page1,20";
                    $run = $dbfound->query($query);
                    ?>
                    <center>
                      <h1>Student Data: <?php echo 'PAGE: '. ' '. $page; ?></h1>
                      
            <table class="table table-striped" >
            
            <thead align="center">
            <tr style="text-align: center;font-size: 16px;">
            <th>S/NO</th>
            <th>Name</th>
            <th>Reg_No</th>
            <th>Place of Attachment</th>
            <th>Address</th>
            <th>Picture</th>
            <th>Logbook Record</th>
            </tr>
            </thead>
          <?php
          $c = 1;
                    while($row = $run->fetch_array()){
                      ?> 
            <tbody>
            <tr>            
            <td><?php echo $c; ?></td>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php  echo $row['Stu_reg_no']; ?></td>
            <td><?php echo $row['place_name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td> <img src="Profile_Picture/<?php echo $row['file_name']; ?>" width="100px" height="100px" ></td>

            <td><a href="view_comment.php?regnum=<?php echo $row['Stu_reg_no'];?>" class='btn btn-info' >View Logbook</a></td>;
            </tr>
            </tbody>
                      <?php
                   $c = $c + 1;
                    }

            ?>

          </table>
        
<?php

$sql = $dbfound->query("SELECT * FROM student_validation");
$num = mysqli_num_rows($sql);

$a = $num/20;
$a = ceil($a);

echo "<br>";

?><ul class="pagination"> 
<li><a href="#">&laquo;</a></li>
<?php
for($b=1; $b<=$a; $b++) { 
  ?>    <li><a href="stu_list.php?page=<?php echo $b; ?>"><?php echo $b; ?> </a> </li> <?php
}
?>
<li><a href="#">&raquo;</a></li>
</ul>
<?php
 
?>
</center>




</div>
      <script src="js/jquery.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
        <script src="assets/js/docs.min.js"></script>

</body>
</html>