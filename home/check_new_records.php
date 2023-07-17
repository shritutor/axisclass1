<?php
include("../backend/connection.php");
session_start();

$schoolid = $_SESSION['schoolid'];

// Get the current count from the client-side
$currentCount = $_POST['count'];
$readCount = isset($_POST['readCount']) ? $_POST['readCount'] : 0;

// Query for new records
$newRecordsQuery = "SELECT id, user_id, school_id, created_at, description, 'event' AS record_type
FROM events
WHERE school_id = '$schoolid' AND created_at > (SELECT created_at FROM events ORDER BY created_at DESC LIMIT $readCount, 1)
UNION ALL
SELECT id, user_id, school_id, created_at, description, 'library' AS record_type
FROM library
WHERE school_id = '$schoolid' AND created_at > (SELECT created_at FROM library ORDER BY created_at DESC LIMIT $readCount, 1)
UNION ALL
SELECT id, user_id, school_id, created_at, description, 'schooldiary' AS record_type
FROM schooldiary
WHERE school_id = '$schoolid' AND created_at > (SELECT created_at FROM schooldiary ORDER BY created_at DESC LIMIT $readCount, 1)
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
