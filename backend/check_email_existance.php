<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('success' => false, 'errors' => array());

// Get the email from the POST request
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Perform validation for email field
if (empty($email)) {
    $response['errors']['email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['errors']['email'] = 'Invalid email format.';
}

// Check if there are any validation errors
if (empty($response['errors'])) {
    // Query the database to check if the email exists
    $query = "SELECT COUNT(*) FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_row($result);
        $emailExists = $row[0] > 0;

        if ($emailExists) {
            $response['success'] = true;
            $response['message'] = 'Email exists.';
        } else {
            $response['success'] = false;
            $response['message'] = 'Email does not exist.';
        }
    } else {
        $response['errors']['database'] = 'Error executing database query.';
    }
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
