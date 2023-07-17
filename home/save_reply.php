<?php

error_reporting(E_ALL);
include "../backend/connection.php";
session_start();

$schoolid = $_SESSION['schoolid'];
$userId = $_SESSION['uid'];

// Get the reply content, parent comment ID, and record details from the request
$replyContent = $_POST['replyContent'];
$parentCommentId = $_POST['parentCommentId'];
$recordId = $_POST['recordId'];
$recordType = $_POST['recordType'];

// TODO: Validate and sanitize the input data

// Save the reply to the comments table
$insertReplyQuery = "INSERT INTO comments (user_id, school_id, content, created_at, record_id, record_type, parent_comment_id)
                     VALUES ('$userId', '$schoolid', '$replyContent', NOW(), '$recordId', '$recordType', '$parentCommentId')";

// Execute the query
$insertReplyResult = mysqli_query($conn, $insertReplyQuery);
if (!$insertReplyResult) {
    // Handle the error case if needed
    $response = array('success' => false, 'message' => 'Failed to save reply.');
    echo json_encode($response);
    exit();
}

// Return a success response
$response = array('success' => true);
echo json_encode($response);
exit();
?>
