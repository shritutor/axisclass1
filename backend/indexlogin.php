<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('success' => false, 'errors' => array());

// Get the form values
$emailOrPhone = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Perform validation
if (empty($emailOrPhone)) {
    $response['errors']['email'] = 'Email or phone number is required.';
}

if (empty($password)) {
    $response['errors']['password'] = 'Password is required.';
}

// Check if there are any validation errors
if (empty($response['errors'])) {
    // Retrieve the user from the database
    $sql = "SELECT * FROM user WHERE email='$emailOrPhone' OR phone='$emailOrPhone' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $hashedPassword = md5($password);

        if ($hashedPassword === $user['password']) {
            // Password is correct, store user data in session
            $_SESSION['uid'] = $user['id'];
            $_SESSION['fullname'] = $user['first_name']." ".$user['middle_name']." ".$user['last_name'];        
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['users_type'] = $user['users_type'];
            $_SESSION['schools_id'] = $user['schools_id'];
            $_SESSION['classes_id'] = $user['classes_id'];
            $_SESSION['divisions_id'] = $user['divisions_id'];

            $response['success'] = true;
        } else {
            $response['errors']['password'] = 'Incorrect password.';
        }
    } else {
        $response['errors']['email'] = 'Email or phone number not found.';
    }
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
