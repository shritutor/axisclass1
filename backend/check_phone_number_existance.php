<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('success' => false, 'errors' => array());

// Get the phone number from the POST request
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);

// Perform validation for phone number field
if (empty($phoneNumber)) {
    $response['errors']['phoneNumber'] = 'Phone number is required.';
} elseif (!preg_match('/^[0-9]{10}$/', $phoneNumber)) {
    $response['errors']['phoneNumber'] = 'Invalid phone number format.';
}

// Check if there are any validation errors
if (empty($response['errors'])) {
    // Query the database to check if the phone number already exists
    $query = "SELECT COUNT(*) FROM user WHERE phone = '$phoneNumber'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_row($result);
        $phoneNumberExists = $row[0] > 0;

        if ($phoneNumberExists) {
            $response['errors']['phoneNumber'] = 'Phone number already exists.';
        } else {
            $response['success'] = true;
            $response['message'] = 'Phone number is valid.';
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
