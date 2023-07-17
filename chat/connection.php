<?php
// $servername = "localhost";
// $username = "tutorpar_axisclass";
// $password = "aP8OH5}?zM2z";
// $dbname = "tutorpar_axisclass";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "axisclass";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>