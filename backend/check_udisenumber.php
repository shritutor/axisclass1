<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('success' => false, 'errors' => array());

// Get the udisenumber from the POST request
$udisenumber = mysqli_real_escape_string($conn, $_POST['udisenumber']);

// Perform validation for udisenumber field
if (empty($udisenumber)) {
    $response['errors']['udisenumber'] = 'UDISE Number is required.';
}

// Check if there are any validation errors
if (empty($response['errors'])) {
    // Query the database to check if the udisenumber exists
    $query = "SELECT COUNT(*) FROM schools WHERE udisenumber = '$udisenumber'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_row($result);
        $udisenumberExists = $row[0] > 0;

        if ($udisenumberExists) {
            $response['success'] = true;
            $response['message'] = 'UDISE Number exists.';
        } else {
            $response['success'] = false;
            $response['message'] = 'UDISE Number does not exist.';
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
