<?php

// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

$url="https://tutorpark.co/axisclass/index.php";
header('Location: '.$url);
?>