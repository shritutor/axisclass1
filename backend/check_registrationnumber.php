<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('exists' => false);

// Get the registrationnumber from the POST request
$registrationnumber = mysqli_real_escape_string($conn, $_POST['registrationnumber']);

// Perform validation for registrationnumber field
if (empty($registrationnumber)) {
    $response['errors']['registrationnumber'] = 'Registration Number is required.';
}

// Check if there are any validation errors
if (empty($response['errors'])) {
    // Query the database to check if the registrationnumber exists
    $query = "SELECT COUNT(*) FROM schools WHERE registrationnumber = '$registrationnumber'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_row($result);
        $registrationnumberExists = $row[0] > 0;

        if ($registrationnumberExists) {
            $response['success'] = true;
            $response['message'] = 'Registration Number exists.';
        } else {
            $response['success'] = false;
            $response['message'] = 'Registration Number does not exist.';
        }
    } else {
        $response['errors']['database'] = 'Error executing database query.';
    }
} else {
    $response['errors']['validation'] = 'Validation errors occurred.';
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
