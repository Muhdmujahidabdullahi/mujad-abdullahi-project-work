<?php
include('connection.php'); 
require_once 'managelogbookexec.php';
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
    table{ border-radius: 10px; margin-left: 10px; margin-right: 20px; margin-top: 30px;background: #008B8B;
          color: #ffffff;width: 70%; font-size: 16px;}
    @media screen and (max-width: 540px){
    	table{width: 50%;font-size: 13px;}
        h1{font-size: 18px;font-weight: bold;}
    }
    </style>

<body>
	<div class="container">
		<div class = "codrops-top">
                <a href="studashboard.php"> <strong>&laquo; Previous page: </strong> Dashboard </a>       
                <div class = "clr"></div>
         </div>

    <?php
                     if ($_SESSION['ad_err']<> "") {
                     ?>
                     <div class="alert alert-dismissable alert-<?php echo $_SESSION['msg_type']; ?>" >
                     <button data-dismiss="alert" class="close" type="button">x</button>
                     <?php

                        if(isset( $_SESSION['ad_err']) && strlen( $_SESSION['ad_err']) > 0){
                         echo $_SESSION['ad_err'];
                          $_SESSION['ad_err'] = "";
                          }
                      ?></div><?php
                    }
    ?>
  
	<?php 
     
                                       $page = $_GET['page'];

					if($page == "" || $page == "1"){
   					$page1 = 0;
					}
					else{
					$page1 = ($page * 5) - 5;
					}

     				$query = "SELECT * FROM logbook LIMIT $page1,5";
                    $run = $dbfound->query($query);
                    ?>
                    <center>
                   	<h1>Weekly Supervisor Comment: <?php echo 'Week: '. ' '. $page; ?></h1>
                    	
                    <table class="table table-hover table-bordered" >
					  
					  <thead>
						<tr style="font-size: 16px;" align="center">
						
						<th width="15%">Day</th>
						<th width="50%" style="padding-right: 10px;">Description</th>
						<th width="15%">Action</th>
						</tr>

						</thead>
					  <?php
                    while($row = $run->fetch_array()){
                      ?> 
            <tbody>
						<tr align="center">						
						<td><?php echo $row['day_name']; ?></td>
						<td style="text-align: justify;"><?php echo $row['Description']; ?></td>
						<td><a href="Logbookchart/<?php echo $row['file_name'];?>" class='btn btn-info' >View</a></td>
						</tr>
						</tbody>
                      <?php

                    }


						?>
           <tr>
            <td><p>Comment</p></td>
            <form action="managelogbookexec.php" method="post">
            <td><textarea class="form-control" name="comment" id="textarea-input" ></textarea></td>
            <td ><button type='submit' name='save' class='btn btn-info'>Save</button></td>
            </form>
           </tr>
					</table>
				  
<?php

$sql = $dbfound->query("SELECT * FROM logbook");
$num = mysqli_num_rows($sql);

$a = $num/5;
$a = ceil($a);
?><ul class="pagination"> 
<li><a href="#">&laquo;</a></li>
<?php
for($b=1; $b<=$a; $b++) { 
	?>    <li><a href="viewlogbook.php?page=<?php echo $b; ?>"><?php echo $b; ?> </a> </li> <?php
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