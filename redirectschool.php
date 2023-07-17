<?php 
session_start();
$_SESSION['schoolid'] = $_GET['id'];

header("Location: joinschool.php");
exit;
?>