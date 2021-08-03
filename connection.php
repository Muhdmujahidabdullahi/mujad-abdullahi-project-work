<?php
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('DBPASS', '');
$Dbase = 'fudsiwes';
$con = mysqli_connect(SERVER,USERNAME,DBPASS);
$dbfound = new mysqli(SERVER,USERNAME,DBPASS,$Dbase);
?>