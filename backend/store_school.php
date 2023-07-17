<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('success' => false, 'errors' => array());

// Get the form values
$schoolname = mysqli_real_escape_string($conn, $_POST['schoolname']);
$udisenumber = mysqli_real_escape_string($conn, $_POST['udisenumber']);
$registrationnumber = mysqli_real_escape_string($conn, $_POST['registrationnumber']);
$areaname = mysqli_real_escape_string($conn, $_POST['areaname']);
$pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);

// Perform validation for each field
if (empty($schoolname)) {
    $response['errors']['schoolname'] = 'School name is required.';
}

if (empty($udisenumber)) {
    $response['errors']['udisenumber'] = 'U dise number is required.';
}

if (empty($registrationnumber)) {
    $response['errors']['registrationnumber'] = 'Registration number is required.';
}

if (empty($areaname)) {
    $response['errors']['areaname'] = 'Area name is required.';
}

if (empty($pincode)) {
    $response['errors']['pincode'] = 'Pin code is required.';
}

if (empty($city)) {
    $response['errors']['city'] = 'City is required.';
}

if (empty($email)) {
    $response['errors']['email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['errors']['email'] = 'Invalid email format.';
}

if (empty($phonenumber)) {
    $response['errors']['phonenumber'] = 'Phone number is required.';
}

// Check if there are any validation errors
if (empty($response['errors'])) {
    // Save the school data in the database
    $sql = "INSERT INTO schools (schoolname, udisenumber, registrationnumber, areaname, pincode, city, email, phonenumber) VALUES ('$schoolname', '$udisenumber', '$registrationnumber', '$areaname', '$pincode', '$city', '$email', '$phonenumber')";

    if (mysqli_query($conn, $sql)) {
        $response['success'] = true;
    } else {
        $response['errors']['database'] = 'Error saving school data.';
    }
}

// Send the response as JSON
header('Content-Type: application/json'); 
echo json_encode($response);

mysqli_close($conn);
?>
