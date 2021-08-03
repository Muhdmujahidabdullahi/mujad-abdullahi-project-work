<?php

include "connection.php";
session_start();
if($_POST)
{
	//$name=$_SESSION['name'];
	$name = "BuhariUbale";
    $msg=$_POST['msg'];
    
	$query=$dbfound->QUERY("INSERT INTO notice (name,message) VALUES ('$name', '$msg')");

	//$query = mysqli_query($conn,$sql);
	if($query)
	{
		$_SESSION['ad_err'] =  'Message was sucessfully sent';
		header('Location: sendnotice.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>