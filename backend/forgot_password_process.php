<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('success' => false, 'message' => '');

// Get the email address from the form
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Perform validation
if (empty($email)) {
    $response['message'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Invalid email format.';
} else {
    // Check if the email exists in the database
    $sql = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Generate a random password reset token
        $token = bin2hex(random_bytes(32));

        // Store the token in the user's record
        $sql = "UPDATE user SET reset_token='$token' WHERE email='$email'";
        mysqli_query($conn, $sql);

        // Send an email to the user with the password reset instructions
        $to = $email;
        $subject = "Password Reset Instructions";
        $message = "Dear user,\n\n";
        $message .= "You have requested to reset your password. Please click on the following link to reset your password:\n";
        $message .= "https://tutorpark.co/axisclass/reset_password.php?token=$token\n\n";
        $message .= "If you did not request this password reset, please ignore this email.\n\n";
        $message .= "Best regards,\n";
        $message .= "AxisClass.com Team";

        $headers = "From: Axisclass <shrikant.tutorpark@gmail.com>\r\n";
        $headers .= "Reply-To: shrikant.tutorpark@gmail.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        mail($to, $subject, $message, $headers);

        // Set the success message
        $response['success'] = true;
        $response['message'] = 'An email with instructions to reset your password has been sent.';
    } else {
        $response['message'] = 'Email not found.';
    }
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
