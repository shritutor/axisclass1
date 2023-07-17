<?php
session_start();
include "./backend/connection.php";

// Check if user is logged in
if (!isset($_SESSION['uid'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

// Retrieve user data from session
$uid = $_SESSION['uid'];

// Retrieve user data from the database
$sql = "SELECT otp_verified, schools_id, classes_id, divisions_id, users_type FROM user WHERE id='$uid' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // Check if otp_verified is 1
    if ($user['otp_verified'] == 1) {
        // Check if schools_id, classes_id, divisions_id, and users_type are empty or not set
        if (empty($user['schools_id']) || empty($user['classes_id']) || empty($user['divisions_id']) || empty($user['users_type'])) {
            // Redirect to school.php
            header("Location: school.php");
            exit;
        }
    } else {
        // OTP is not verified, redirect to another page
        header("Location: emailverification.php");
        exit;
    }
} else {
    // User not found, redirect to login page
    header("Location: signup.php");
    exit;
}

header("Location: home/home.php");
exit;
mysqli_close($conn);
?>
