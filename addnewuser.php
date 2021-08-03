
<?php
$reg;
$pass;
$row = 0;
$error="";
if($_SERVER['REQUEST_METHOD']=='POST'){

$staffid = $_POST['tx1'];
$staffname = $_POST['tx2'];
$rank = $_POST['tx3'];
$dept = $_POST['tx4'];
$phone = $_POST['tx5'];
$email = $_POST['tx6'];
$pass = $_POST['tx7'];

$server= "localhost";
$username = "root";
$password = "";
$dbname = "fudsiwes";

$con = mysql_connect($server ,$username,$password);
$dbfound=mysql_select_db($dbname ,$con);
if($dbfound){
	$sql = "INSERT INTO supervisor_account (staff_ID,fullname,Department,Rank,phone,email,password) 
VALUES ('$staffid','$staffname' ,'$dept','$rank','$phone', '$email','$pass')";
	$result = mysql_query($sql);
	if($result){	
		$error =  "User Added Successiful";
		}
		else{
			$error =  "Try Again Something Went Wrong";
		}
	
	}
else{
	echo "no";
}
}
?>


<?php
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
  //header ("Location: adminlogin.php");
}
?>

<?PHP

//session_start();
//session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Home Page </title>
  <link rel="stylesheet" type="text/css" href="boot.css">
  <link rel="stylesheet" type="text/css" href="adorn/demo.css"/>
  <style>
  form{border: 3px solid #f1f1f1;}
    input[type="text"]{width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block; border: 1px solid #ccc; box-sizing: border-box;}
    .input{width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block; border: 1px solid #ccc; box-sizing: border-box;}
    input[type="password"]{width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block; border: 1px solid #ccc; box-sizing: border-box;}
    .button{background-color: #4CAF50;color: white; padding: 14px 20px; margin: 8px 0; border: none;cursor: pointer;width: 100%;}

.group:before,
.group:after {
  content: "";
  display: table;
}
.group:after {
  clear: both;
}
.group {
  clear: both;
  *zoom: 1;
}
section {
  float: left;
  margin: 0 1%;
  width: 19%;
}
.section {
  float: left;
  margin: 0 1%;
  width: 30%;
}
aside {
  float: right;
  margin: 0 1%;
  width: 70%;
}

body {
  
  overflow:scroll;
  color:  #228B22 ;
  font: 300 16px/22px "Lato", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
}

</style>
<body style="background-color:transparent; background-image:url('img/bg.jpg')">

<div class = "codrops-top">
                <a href="coordinatorhome.php">
                    <strong>&laquo; Previous page: </strong> Dashboard
                </a>
                
                <div class = "clr"></div>
  </div><!--/ Codrops top bar --><br><br>
<div class="group">

  
  <aside> <fieldset style="width: 40%"><legend><b>Add New Supervisor</b></legend>
   <div style = "font-size:11px; color:#cc0000; margin-top:10px"><font size="5"><?php PRINT $error; ?></font></div>
<form role="form" action="addnewuser.php" method="POST">
 <div class="form-group">
  <input type="text"  name="tx1" required="required" placeholder="Supervisor ID"> 
  </div> 
  <div class="form-group">
  <input type="text"  name="tx2" required="required" placeholder="Supervisor Name"> 
  </div>
    <div class="form-group">
  <input type="text"  required="required" name="tx3" placeholder="Designation"> 
  </div>
    <div class="form-group">
  <input type="text"  name="tx4" required="required" placeholder="Supervisor Department"> 
  </div>
    <div class="form-group">
  <input type="text"  required="required" name="tx5" placeholder="Supervisor Phone Number"> 
  </div>
    <div class="form-group">
  <input type="text"  name="tx6" required="required" placeholder="E-Mail Address"> 
  </div>
    <div class="form-group">
  <input type="text"  name="tx7" required="required" placeholder="Create Default Password"> 
  </div>
  <input  type="submit" value="       ADD     " class="button">
</form>
</fieldset>

 </aside>
</div><br>
<br><br>
         
</body>

</html>