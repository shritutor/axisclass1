<?php


error_reporting(E_ALL);
include "../backend/connection.php";
session_start();

$schoolid = $_SESSION['schoolid'];
$userId = $_SESSION['uid'];

// Get the comment content and record details from the request
$commentContent = $_POST['commentContent'];
$recordId = $_POST['recordId'];
$recordType = $_POST['recordType'];

// TODO: Validate and sanitize the input data

// Save the comment to the comments table
$insertCommentQuery = "INSERT INTO comments (user_id, school_id, content, created_at, record_id, record_type)
                      VALUES ('$userId', '$schoolid', '$commentContent', NOW(), '$recordId', '$recordType')";

// Execute the query
$insertCommentResult = mysqli_query($conn, $insertCommentQuery);
if (!$insertCommentResult) {
    // Handle the error case if needed
    $response = array('success' => false, 'message' => 'Failed to save comment.');
    echo json_encode($response);
    exit();
}

// Return a success response
$response = array('success' => true);
echo json_encode($response);
exit();
?>