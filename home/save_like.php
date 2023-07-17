<?php
include("../backend/connection.php");
session_start();

// Retrieve the record ID and record type from the AJAX request
$recordId = $_POST['recordId'];
$recordType = $_POST['recordType'];

// Retrieve the user ID and school ID from the session
$userId = $_SESSION['uid'];
$schoolId = $_SESSION['schoolid'];

// Check if the user has already liked the record
$existingLikeQuery = "SELECT id FROM likes WHERE record_id = '$recordId' AND record_type = '$recordType' AND user_id = '$userId' LIMIT 1";
$existingLikeResult = mysqli_query($conn, $existingLikeQuery);

if (mysqli_num_rows($existingLikeResult) > 0) {
    // User has already liked the record, return a success response
    echo json_encode(['success' => true]);
} else {
    // Insert a new like record into the database
    $insertQuery = "INSERT INTO likes (record_id, record_type, user_id, school_id) VALUES ('$recordId', '$recordType', '$userId', '$schoolId')";
    $result = mysqli_query($conn, $insertQuery);

    if ($result) {
        // Liked successfully, return a success response
        echo json_encode(['success' => true]);
    } else {
        // Failed to save the like, return an error response
        echo json_encode(['success' => false, 'message' => 'Failed to save like']);
    }
}
?>

