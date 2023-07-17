<?php
session_start();
include "connection.php";

// Check if the password reset token is valid
if (!isset($_POST['token'])) {
    // Invalid or missing token, handle accordingly (e.g., return an error response)
    $response = array(
        'success' => false,
        'message' => 'Invalid or missing token.'
    );
    echo json_encode($response);
    exit();
}

$token = mysqli_real_escape_string($conn, $_POST['token']);

// Check if the token exists in the database and is associated with a valid user
$sql = "SELECT * FROM user WHERE reset_token='$token'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $userId = $user['id'];
    
    // Check if the token has expired
    $resetTokenExpiry = $user['reset_token_expiry'];
    $currentTime = date('Y-m-d H:i:s');
    
    if (is_null($resetTokenExpiry) || strtotime($resetTokenExpiry) > strtotime($currentTime)) {
        // Token is valid, allow the user to reset the password
        
        // Get the form values
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirm_password']);
        
        // Perform password validation
        $errors = array();
        
        if (empty($password)) {
            $errors['password'] = 'Password is required.';
        } elseif (strlen($password) < 8) {
            $errors['password'] = 'Password must be at least 8 characters long.';
        }
        
        if (empty($confirmPassword)) {
            $errors['confirm_password'] = 'Confirm Password is required.';
        } elseif ($password !== $confirmPassword) {
            $errors['confirm_password'] = 'Passwords do not match.';
        }
        
        // Check if there are any validation errors
        if (empty($errors)) {
            $hashedPassword = md5($password);
            
            // Update the user's password
            $updateSql = "UPDATE user SET password='$hashedPassword', reset_token=NULL, reset_token_expiry=NULL WHERE id='$userId'";
            $updateResult = mysqli_query($conn, $updateSql);
            
            if ($updateResult) {
                // Password reset successful
                $response = array(
                    'success' => true,
                    'message' => 'Your password has been successfully reset.'
                );
                echo json_encode($response);
                exit();
            } else {
                // Failed to update the password
                $response = array(
                    'success' => false,
                    'message' => 'Failed to reset the password. Please try again later.'
                );
                echo json_encode($response);
                exit();
            }
        } else {
            // Validation errors
            $response = array(
                'success' => false,
                'message' => 'Validation errors occurred.',
                'errors' => $errors
            );
            echo json_encode($response);
            exit();
        }
    } else {
        // Expired token
        $response = array(
            'success' => false,
            'message' => 'The password reset token has expired.'
        );
        echo json_encode($response);
        exit();
    }
} else {
    // Invalid token
    $response = array(
        'success' => false,
        'message' => 'Invalid password reset token.'
    );
    echo json_encode($response);
    exit();
}