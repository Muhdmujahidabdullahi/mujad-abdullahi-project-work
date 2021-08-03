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
    \
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
            $page = 1;
					}
					else{
					$page1 = ($page * 5) - 5;
					}

     				$query = "SELECT * FROM logbook LIMIT $page1,5";
                    $run = $dbfound->query($query);
                    ?>
                    <center>
                    	<h1>WEEKLY LOGBOOK RECORD: <?php echo 'PAGE: '. ' '. $page; ?></h1>
                    	
            <table class="table table-hover table-bordered" >
					  
					  <thead align="center">
						<tr style="text-align: center;font-size: 16px;">
						
						<th width="15%">Day</th>
						<th width="50%" style="padding-right: 10px;">Description</th>
						<th width="15%" colspan="2">Action</th>
						</tr>
						</thead>
					<?php
                    while($row = $run->fetch_array()){
                      ?> 
                      	<tbody>
						<tr>						
						<td><?php echo $row['day_name']; ?></td>
						<td style="text-align: justify;"><?php echo $row['Description']; ?></td>
						<td><a href="managelogbook.php?edit=<?php echo $row['id'];?>"class='btn btn-info' >Edit</a></td>
						<td><a href="managelogbook.php?delete=<?php echo $row['id']; ?>" class='btn btn-danger' >Delete</a></td>
						</tr>
						</tbody>
                      <?php

                    }

						?>

					</table>
				
<?php

$sql = $dbfound->query("SELECT * FROM logbook");
$num = mysqli_num_rows($sql);

$a = $num/5;
$a = ceil($a);

echo "<br>";

?><ul class="pagination"> 
<li><a href="#">&laquo;</a></li>
<?php
for($b=1; $b<=$a; $b++) { 
	?>    <li><a href="managelogbook.php?page=<?php echo $b; ?>"><?php echo $b; ?> </a> </li> <?php
}
?>
<li><a href="#">&raquo;</a></li>
</ul>
<?php
 
?>
</center>


<div class="row">
    <div class="col-lg-6">
      <div class="well contact-form-container">
        <form class=" form-inline bootstrap-form-with-validation" action ="managelogbookexec.php" autocomplete ="on" method="post" enctype="multipart/form-data">
          <fieldset>

          	<input type="hidden" name="id" value="<?php echo $id; ?>">
          	<input type="hidden" name="catego" value="<?php echo $i; ?>">
        
        <div class="form-group has-success has-feedback">
            <label class="control-label" for="text-input">Week No.: </label>
            <input class="form-control" type="number" name="week_no" id="text-input" value="<?php echo $week; ?>">
          </div>
        
        <div class="form-group has-success has-feedback">
            <label class="control-label" for="password-input">Day Name: </label>
            <input class="form-control" type="text" name="day_name" id="text-input" value="<?php echo $day; ?>">
          </div>
        
        <div class="form-group has-success has-feedback">
            <label class="control-label" for="email-input">Record Date: </label>
            <input class="form-control" type="date" name="rdate" value="<?php echo $date; ?>"></div>
        
        <div class="form-group has-success has-feedback">
            <label class="control-label" for="textarea-input">Exprience </label>
            <textarea class="form-control" name="desc" id="textarea-input" cols="47" rows="4"><?php echo $desc; ?></textarea>
          </div>

            <div style="height: 10px;clear: both"></div>

            <div class="form-group">
              <div class="col-lg-10">
                <div class="form-group">
				
				<?php if($update== true){
  				echo "<button type='submit' name='update' class='btn btn-info'>Update</button>";
				}
				else{
				echo "<button type='submit' name='save' class='btn btn-info'>Save</button>";
				}
	 			?>
				</div> 
              </div><br>
              
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>


</div>
			<script src="js/jquery.min.js"></script>
    		<script src="dist/js/bootstrap.min.js"></script>
    		<script src="assets/js/docs.min.js"></script>

</body>
</html>