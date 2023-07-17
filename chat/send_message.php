<?php

include("../backend/connection.php");
session_start();

$user_id = $_SESSION['uid'];

// Fetch user information from the user table
$userQuery = "SELECT divisions_id, classes_id, schools_id FROM user WHERE id = ?";
$stmt = mysqli_prepare($conn, $userQuery);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$userResult = mysqli_stmt_get_result($stmt);

if (!$userResult) {
    handleDatabaseError($conn);
}

$userData = mysqli_fetch_assoc($userResult);

$division_id = $userData['divisions_id'];
$classes_id = $userData['classes_id'];
$school_id = $userData['schools_id'];

// Check if the user is logged in
if (!isset($_SESSION['uid'])) {
  echo json_encode(['error' => 'User not logged in']);
  exit;
}

// Retrieve the sender ID from the session
$senderId = $_SESSION['uid'];

// Retrieve the recipient ID and message text from the POST data
$recipientId = $_POST['recipientId'];
$messageText = $_POST['messageText'];

// Validate and sanitize the input if needed

// Prepare the query to insert the message into the database
$insertQuery = "INSERT INTO messages (sender_id, recipient_id, message_text) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $insertQuery);
mysqli_stmt_bind_param($stmt, "iis", $senderId, $recipientId, $messageText);
$result = mysqli_stmt_execute($stmt);

if ($result) {
  echo json_encode(['success' => 'Message sent successfully']);
} else {
  echo json_encode(['error' => 'Error occurred while sending the message']);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
