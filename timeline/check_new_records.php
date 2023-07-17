<?php
include("../backend/connection.php");
session_start();

$user_id = $_SESSION['user_id'];

// Fetch user information from the user table
$userQuery = "SELECT divisions_id, classes_id, schools_id FROM user WHERE id = '$user_id'";
$userResult = mysqli_query($conn, $userQuery);
if (!$userResult) {
    die(mysqli_error($conn));
}

$userData = mysqli_fetch_assoc($userResult);

$division_id = $userData['divisions_id'];
$classes_id = $userData['classes_id'];
$school_id = $userData['schools_id'];

// Get the current count from the client-side
$currentCount = $_POST['count'];
$readCount = isset($_POST['readCount']) ? $_POST['readCount'] : 0;

// Query for new records
$newRecordsQuery = "SELECT id, user_id, school_id, created_at, description, 'event' AS record_type
FROM events
WHERE schools_id = '$schools_id' AND divisions_id = '$division_id' AND classes_id = '$classes_id' AND created_at > (SELECT created_at FROM events ORDER BY created_at DESC LIMIT $readCount, 1)
UNION ALL
SELECT id, user_id, school_id, created_at, description, 'library' AS record_type
FROM library
WHERE schools_id = '$school_id' AND divisions_id = '$division_id' AND classes_id = '$classes_id' AND created_at > (SELECT created_at FROM library ORDER BY created_at DESC LIMIT $readCount, 1)
UNION ALL
SELECT id, user_id, school_id, created_at, description, 'schooldiary' AS record_type
FROM schooldiary
WHERE schools_id = '$school_id' AND divisions_id = '$division_id' AND classes_id = '$classes_id' AND created_at > (SELECT created_at FROM schooldiary ORDER BY created_at DESC LIMIT $readCount, 1)
UNION ALL
SELECT id, user_id, school_id, created_at, description, 'timeline' AS record_type
FROM timeline
WHERE schools_id = '$school_id' AND divisions_id = '$division_id' AND classes_id = '$classes_id' AND created_at > (SELECT created_at FROM timeline ORDER BY created_at DESC LIMIT $readCount, 1)
ORDER BY created_at DESC";

$newRecordsResult = mysqli_query($conn, $newRecordsQuery);

if (!$newRecordsResult) {
    die(mysqli_error($conn));
}

$newRecords = mysqli_fetch_all($newRecordsResult, MYSQLI_ASSOC);

// Combine the results into a single array
$response = array(
    'records' => $newRecords,
    'count' => count($newRecords)
);

// Output the JSON response
echo json_encode($response);

mysqli_close($conn);
?>
