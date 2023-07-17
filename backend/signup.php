<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('success' => false, 'errors' => array());

// Get the form values
$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
$middlename = mysqli_real_escape_string($conn, $_POST['middleName']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

// Perform validation for each field
if (empty($firstname)) {
    $response['errors']['firstname'] = 'First name is required.';
}

if (empty($lastname)) {
    $response['errors']['lastname'] = 'Last name is required.';
}

if (empty($gender)) {
    $response['errors']['gender'] = 'Gender is required.';
}

if (empty($email)) {
    $response['errors']['email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['errors']['email'] = 'Invalid email format.';
}

if (empty($phoneNumber)) {
    $response['errors']['phone'] = 'Phone number is required.';
} elseif (!preg_match('/^[0-9]{10}$/', $phoneNumber)) {
    $response['errors']['phone'] = 'Invalid phone number format.';
} 

if (empty($password)) {
    $response['errors']['password'] = 'Password is required.';
} elseif (strlen($password) < 6) {
    $response['errors']['password'] = 'Password should be at least 6 characters long.';
}

if (empty($confirmPassword)) {
    $response['errors']['confirmpassword'] = 'Confirm password is required.';
} elseif ($password !== $confirmPassword) {
    $response['errors']['confirmpassword'] = 'Passwords do not match.';
}

// Check if there are any validation errors
if (empty($response['errors'])) {
    // Generate a random OTP
    $otp = generateRandomOTP(6);

    // Save the OTP and user data in the database
    $hashedPassword = md5($password);
    $sql = "INSERT INTO user(first_name, middle_name, last_name, gender, email, phone, password, otp_verified, otp) VALUES ('$firstname', '$middlename', '$lastname', '$gender', '$email', '$phoneNumber', '$hashedPassword', '0', '$otp')";

    if (mysqli_query($conn, $sql)) {
        // Send the OTP to the user's email
        $to = $email;
        $subject = "OTP Verification";
        $message = "Your OTP is: " . $otp;
        $headers = "From: shrikant.tutorpark@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            $response['success'] = true;
            $_SESSION['email']=$email;
        } else {
            $response['errors']['email'] = 'Failed to send OTP email.';
        }
    } else {
        $response['errors']['database'] = 'Error saving user data.';
    }
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);

// Function to generate a random OTP
function generateRandomOTP($length)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $otp = '';

    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $otp;
}
