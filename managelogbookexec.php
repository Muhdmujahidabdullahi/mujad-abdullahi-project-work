
<?php
	session_start();
	$id= 0;
    $week = '';
	$day = '';
	$desc = '';
	$date = '';
	$dayno = '';
	$sturegno = '';
    
    $update = false;

if (isset($_POST['save'])) {
	include('connection.php');
	$comment = $_POST['comment'];
	$weekn = '1';

	$dbfound->Query("INSERT INTO supervisor_comment (weekno, comment) VALUES ('$weekn','$comment')");

	$_SESSION['ad_err']="Comment has been Saved";
	$_SESSION['msg_type']="sucess";
	header('location:viewlogbook.php');

}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	//$reg = $_GET['catego'];
	$dbfound->Query("DELETE FROM logbook WHERE id='$id'") or die($dbfound->mysql_errno());

	$_SESSION['ad_err'] = "Record has been Deleted";
	$_SESSION['msg_type'] = "danger";
	header('location:managelogbook.php');
}

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	
	$update = true;
    
	$sql =$dbfound-> query("SELECT * FROM logbook WHERE id='$id'");
	while ($res=$sql->fetch_array()) {
		    $week = $res['week_no'];;
		    $day = $res['day_name'];;
		    $date = $res['date'];
		    $desc = $res['Description'];
		    $dayno = $res['day_no'];
			}
}

if (isset($_POST['update'])) {
	include('connection.php');
	$id = $_POST['id'];
	$eweek = $_POST['week_no'];
	$edayname = $_POST['day_name'];
	$edate = $_POST['rdate'];
	$edesc = $_POST['desc'];
	
	$dbfound->QUERY("UPDATE logbook SET week_no='$eweek', day_name='$edayname',Description='$edesc',date='$edate' WHERE id='$id'");

	$_SESSION['ad_err'] = "Record Has Been Updated";
	$_SESSION['msg_type'] = "success";
	header("location:managelogbook.php");
}
?>