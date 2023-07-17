<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('success' => false, 'errors' => array());

// Get the form values
$otp = mysqli_real_escape_string($conn, $_POST['otp']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Check if the OTP matches the one stored in the database
$sql = "SELECT * FROM user WHERE email = '$email' AND otp = '$otp'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Update the user's status as verified
    $updateSql = "UPDATE user SET otp_verified = '1' WHERE email = '$email'";
    if (mysqli_query($conn, $updateSql)) {
        $response['success'] = true;
        $_SESSION['email'] = $email;
    } else {
        $response['errors']['database'] = 'Error updating user data.';
    }
} else {
    $response['errors']['otp'] = 'Invalid OTP.';
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
