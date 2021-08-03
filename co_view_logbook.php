<?php
include('connection.php'); 

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
    <style type="text/css">
    body{background-color:transparent; background-image:url('img/bg.jpg') }
    table{ border-radius: 20px; margin-left: 10px; margin-right: 20px; margin-top: 30px;background: #008B8B;
          color: #ffffff;width: 70%; font-size: 16px;}
    @media screen and (max-width: 540px){
    	table{width: 50%;font-size: 13px;}
      h1{font-size: 18px;font-weight: bold;}
    }
    </style>

<body>
	<div class="container">
    
    <div class = "codrops-top">
                <a href="coordinatorhome.php"> <strong>&laquo; Previous page: </strong> Dashboard </a>       
                <div class = "clr"></div>
    </div>


    <?php


        $page = $_GET['page'];

          if($page == "" || $page == "1"){
            $page1 = 0;
            $page = 1;
          }
          else{
          $page1 = ($page * 5) - 5;
          }


         $reg = $_GET['regnum'];
          //echo $reg;
        


        if(isset($_GET['regnum'])){
        

          $reg = $_GET['regnum'];
          //echo $reg;
        
          $query = "SELECT * FROM logbook WHERE stu_regno = '$reg' LIMIT $page1,5 ";
                    $run = $dbfound->query($query);

          $weekno = $_GET['page'];
                    if($weekno == "" || $weekno == 1){
                      $week = 1;
                    }else{

                      $week = $weekno;

                    }

                     $qry = $dbfound->query("SELECT * FROM supervisor_comment WHERE weekno = $week ");
                     while ($row = $qry->fetch_array()) {
                         $comment = $row['comment'];
                         $wkn = $row['weekno'];
                         $commentdate = $row['comment_date'];
                     }


                    ?>
           <center>
              <h2>WEEKLY LOGBOOK RECORD: <?php echo 'Week: '. ' '. $page; ?></h2>
                      
            <table class="table table-hover table-bordered" >
            
            <thead align="center">
            <tr style="text-align: center;font-size: 16px;">
            <th width="15%">Date</th>
            <th width="15%">Day Name</th>
            <th width="50%" style="padding-right: 10px;">Description</th>
            <th width="15%">Record Date</th>
            
            </tr>
            </thead>
          <?php
                    while($row = $run->fetch_array()){
                      ?> 
                        <tbody>
            <tr>
            <td><?php echo $row['date']; ?></td>            
            <td><?php echo $row['day_name']; ?></td>
            <td style="text-align: justify;"><?php echo $row['Description']; ?></td>
            <td><?php echo $row['create_date']; ?></td>
            
            </tr>
            </tbody>
                      <?php

                    }

                    //echo $reg;
            }
            ?>

            </table>
            <table class="table  table-bordered">
            <thead align="center">
            <tr style="text-align: center;font-size: 16px;">
            <th width="20%">Commentator</th>
            <th width="15%">Week No</th>
            <th width="40%" style="padding-right: 10px;">Comment</th>
            <th width="15%">Record Date</th>
            </tr>
            </thead>

            <tr>
            <td><p>Industry Supervisor Comment</p></td>
            <td><?php echo $wkn; ?></td>
            <td><?php echo $comment; ?></td>
            <td ><?php echo $commentdate; ?></td>
            
           </tr>
          </table>
        

<?php
$reg = $_GET['regnum'];

$sql = $dbfound->query("SELECT * FROM logbook WHERE stu_regno = '$reg' ");
$num = mysqli_num_rows($sql);

$a = $num/5;
$a = ceil($a);

echo "<br>";

?><ul class="pagination"> 
<li><a href="#">&laquo;</a></li>
<?php
for($b=1; $b<=$a; $b++) { 
  ?>    <li><a href="co_view_logbook.php?page=<?php echo $b; ?>&regnum=<?php echo $reg;?>"><?php echo $b; ?> </a> </li> <?php
}
?>
<li><a href="#">&raquo;</a></li>
</ul>
<?php
 
?>




  
</div>
			<script src="js/jquery.min.js"></script>
    		<script src="dist/js/bootstrap.min.js"></script>
    		<script src="assets/js/docs.min.js"></script>

</body>
</html>