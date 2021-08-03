<?php
session_start();
session_destroy();
 //session_destroy();
 unset($_SESSION['STU_ID']);
 header("Location: index.php");

?>